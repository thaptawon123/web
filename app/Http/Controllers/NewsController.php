<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:news.view')->only(['index']);
        $this->middleware('permission:news.create')->only(['create','store']);
        $this->middleware('permission:news.update')->only(['edit','update']);
        $this->middleware('permission:news.delete')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = News::orderByDesc('published_at')->orderByDesc('created_at')->paginate(10);
        return view('admin.news.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:news,slug',
            'excerpt' => 'nullable|string|max:500',
            'body' => 'required|string',
            'cover_image' => 'nullable|image|max:4096',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('cover_image')) {
            $p = $request->file('cover_image')->store('uploads', 'public');
            $data['cover_image'] = '/storage/' . $p;
        }

        $news = News::create($data);
        return redirect()->route('admin.news.index')->with('status', 'บันทึกข่าวเรียบร้อย');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:news,slug,' . $news->id,
            'excerpt' => 'nullable|string|max:500',
            'body' => 'required|string',
            'cover_image' => 'nullable|image|max:4096',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('cover_image')) {
            // delete old
            if ($news->cover_image && str_starts_with($news->cover_image, '/storage/')) {
                $rel = substr($news->cover_image, strlen('/storage/'));
                Storage::disk('public')->delete($rel);
            }
            $p = $request->file('cover_image')->store('uploads', 'public');
            $data['cover_image'] = '/storage/' . $p;
        }

        $news->update($data);
        return redirect()->route('admin.news.index')->with('status', 'อัปเดตข่าวเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        if ($news->cover_image && str_starts_with($news->cover_image, '/storage/')) {
            $rel = substr($news->cover_image, strlen('/storage/'));
            Storage::disk('public')->delete($rel);
        }
        $news->delete();
        return redirect()->route('admin.news.index')->with('status', 'ลบข่าวเรียบร้อย');
    }

    /**
     * Public listing of published news
     */
    public function publicIndex()
    {
        $items = News::where('status', 'published')
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->paginate(9);
        return view('news', compact('items'));
    }
}
