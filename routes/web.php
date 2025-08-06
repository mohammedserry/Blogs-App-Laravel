<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;

// Theme Routes
Route::controller(ThemeController::class)->name('theme.')->group(function () {
  Route::get('/', 'index')->name('index');
  Route::get('/category/{id}', 'category')->name('category');
  Route::get('/contact', 'contact')->name('contact');
  // Route::get('/single-blog', 'singleBlog')->name('singleBlog');
});

// Subscriber Route
Route::post('/subscriber/store', [SubscriberController::class, 'store'])->name('subscriber.store');

// Contact Route
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// Blog Route
Route::get('/my-blogs', [BlogController::class, 'myBlogs'])->name('blogs.my-blogs');
Route::resource('blogs', BlogController::class);

// Comment Route
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');

require __DIR__ . '/auth.php';
