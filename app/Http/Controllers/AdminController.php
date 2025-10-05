<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Faculty;

class AdminController extends Controller
{
    protected $contentPath = 'site_content.json';

    protected function loadContent()
    {
        if (Storage::exists($this->contentPath)) {
            return json_decode(Storage::get($this->contentPath), true);
        }

        return [
            'banner' => '/images/banner-default.jpg',
            'site_title' => 'สาขาวิชา Software Engineering',
            'cards' => [],
            'faculty' => [],
            'programs' => '',
        ];
    }

    protected function saveContent(array $data)
    {
        Storage::put($this->contentPath, json_encode($data, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));
    }

    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->input('email'))->first();
        if ($admin && Hash::check($request->input('password'), $admin->password)) {
            $request->session()->put('admin_logged_in', true);
            $request->session()->put('admin_id', $admin->id);
            // Redirect to admin panel
            return redirect()->to('/admin/panel');
        }

        return back()->withErrors(['email' => 'ข้อมูลไม่ถูกต้อง'])->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin_logged_in');
        $request->session()->forget('admin_id');
        return redirect('/');
    }

    public function panel(Request $request)
    {
        if (!$request->session()->get('admin_logged_in')) {
            return redirect('/admin');
        }

        $content = $this->loadContent();
        $faculties = Faculty::orderBy('id')->get();
        return view('admin.panel', ['content' => $content, 'faculties' => $faculties]);
    }

    public function save(Request $request)
    {
        if (!$request->session()->get('admin_logged_in')) {
            return redirect('/admin');
        }

        $content = $this->loadContent();

        // text fields
        $content['site_title'] = $request->input('site_title', $content['site_title']);
        $content['programs'] = $request->input('programs', $content['programs']);

        // handle banner upload
        if ($request->hasFile('banner')) {
            $path = $request->file('banner')->store('uploads', 'public');
            $content['banner'] = '/storage/' . $path;
        }

        // handle card images, captions, and descriptions (up to 6)
        $cards = [];
        for ($i = 1; $i <= 6; $i++) {
            $caption = $request->input('card_caption_' . $i);
            $description = $request->input('card_description_' . $i);
            $imgPath = $content['cards'][$i-1]['image'] ?? null;

            if ($request->hasFile('card_image_' . $i)) {
                $p = $request->file('card_image_' . $i)->store('uploads', 'public');
                $imgPath = '/storage/' . $p;
            }

            if ($imgPath || $caption || $description) {
                $cards[] = ['image' => $imgPath, 'caption' => $caption, 'description' => $description];
            }
        }

        $content['cards'] = $cards;

        // faculty JSON textarea (simple format)
        $facultyJson = $request->input('faculty_json', null);
        if ($facultyJson) {
            $decoded = json_decode($facultyJson, true);
            if (is_array($decoded)) {
                $content['faculty'] = $decoded;
            }
        }

        $this->saveContent($content);

        return back()->with('status', 'บันทึกข้อมูลเรียบร้อย');
    }

    // return raw JSON content for download or preview
    public function contentJson(Request $request)
    {
        $content = $this->loadContent();
        return response()->json($content);
    }

    // faculty create
    public function createFaculty(Request $request)
    {
        if (!$request->session()->get('admin_logged_in')) return redirect('/admin');
        $data = $request->validate([
            'name' => 'required|string',
            'degree' => 'nullable|string',
            'position' => 'nullable|string',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $p = $request->file('image')->store('uploads', 'public');
            $data['image'] = '/storage/' . $p;
        }

        Faculty::create($data);
        return back()->with('status', 'เพิ่มอาจารย์เรียบร้อย');
    }

    public function deleteFaculty(Request $request, $id)
    {
        if (!$request->session()->get('admin_logged_in')) return redirect('/admin');
        $f = Faculty::find($id);
        if ($f) $f->delete();
        return back()->with('status', 'ลบอาจารย์เรียบร้อย');
    }
}
