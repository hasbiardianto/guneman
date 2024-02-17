<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controller\Auth\LogoutController;
use App\Http\Controllers\Auth\SocialiteController;

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

// Landing Page Route
Route::get('/', [FrontPageController::class, 'homepage']);
Route::get('/course', [FrontPageController::class, 'course']);
Route::get('/books', [FrontPageController::class, 'books']);
Route::get('/about', [FrontPageController::class, 'about']);
Route::get('/blog', [BlogController::class, 'view']);

// Auth User
Route::get('/dashboard', function () {
    return view('dashboard.home', ["title" => "Dashboard"]);
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Role
Route::middleware(['checkAdminRole'])->group(function () {
    // Routes accessible only to users with the admin role
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/users', [AdminController::class, 'users'])->name('show.users');
    Route::get('/admin/categories', [AdminController::class, 'category'])->name('create.category');
    Route::post('/admin/store-category', [CategoryController::class, 'store'])->name('store.category');
    Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('destroy.category');
    Route::delete('/admin/users/{user}', [AdminController::class, 'destroyUser'])->name('destroy.user');
    // Add more admin routes as needed
});

// Route User
Route::middleware('auth')->group(function () {
    // Route::get('/profile', ["title" => "Profile"]);
    Route::get('/dashboard/setting', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/dashboard/setting', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/dashboard/setting', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/dashboard/upload-profile', [ProfileController::class, 'upload'])->name('store.profile');
    Route::delete('/dashboard/{user}/delete-profile', [ProfileController::class, 'delete'])->name('delete.profile');
    Route::get('/blog/slug', [BlogController::class, 'slug']);
    Route::get('/blog/create-blog', [BlogController::class, 'create']);
    Route::post('/upload-image', [BlogController::class, 'upload'])->name('ckeditor.upload');
});

// Logout & Outsider
Route::get('/profile/{username}', [ProfileController::class, 'view'])->name('profile.view');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

/**
 * socialite auth
 */
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);

require __DIR__.'/auth.php';

// routes/web.php
