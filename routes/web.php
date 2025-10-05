<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/news', function () {
    return view('news');
});

// staff page
Route::get('/staff', function () {
    return view('staff');
});

// simple admin routes
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

// User Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);

// Admin Routes

Route::get('/admin', [AdminController::class, 'showLogin']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout']);
Route::get('/admin/panel', [AdminController::class, 'panel']);
Route::post('/admin/save', [AdminController::class, 'save']);
Route::get('/admin/content-json', [AdminController::class, 'contentJson']);
Route::post('/admin/faculty/create', [AdminController::class, 'createFaculty']);
Route::post('/admin/faculty/{id}/delete', [AdminController::class, 'deleteFaculty']);
