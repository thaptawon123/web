<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Require authentication for all content pages
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        // Check if admin is logged in
        $isAdminLoggedIn = request()->session()->get('admin_logged_in', false);
        return view('home', compact('isAdminLoggedIn'));
    });

    // alias /home to same view
    Route::get('/home', function () {
        // Check if admin is logged in
        $isAdminLoggedIn = request()->session()->get('admin_logged_in', false);
        return view('home', compact('isAdminLoggedIn'));
    });

    // faculty and staff page
    Route::get('/faculty', function () {
        // Get all faculty members ordered by id (which reflects the order they were created)
        $faculties = \App\Models\Faculty::orderBy('id')->get();
        return view('faculty', compact('faculties'));
    });

    // programs page
    Route::get('/programs', function () {
        return view('programs');
    });

    // research page
    Route::get('/research', function () {
        return view('research');
    });

    // news page
    Route::get('/news', [NewsController::class, 'publicIndex']);

    // staff page
    Route::get('/staff', function () {
        return view('staff');
    });
});

// simple admin routes

// User Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});
Route::middleware('auth')->post('/logout', [AuthController::class, 'logout']);

// Admin Routes
Route::get('/admin', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->middleware('throttle:5,1');

Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::post('/logout', [AdminController::class, 'logout']);
    Route::get('/panel', [AdminController::class, 'panel']);
    Route::post('/save', [AdminController::class, 'save']);
    Route::get('/content-json', [AdminController::class, 'contentJson']);
    Route::post('/faculty/create', [AdminController::class, 'createFaculty']);
    Route::post('/faculty/{id}/delete', [AdminController::class, 'deleteFaculty']);
    Route::resource('news', NewsController::class)->names('admin.news');
});
