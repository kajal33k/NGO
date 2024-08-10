<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/food',[HomeController::class, 'food'])->name('food');
Route::get('/registration',[HomeController::class, 'registration'])->name('registration');
Route::get('/read',[HomeController::class, 'read'])->name('read');
Route::get('/view',[HomeController::class, 'view'])->name('view');
Route::get('/login',[HomeController::class, 'login'])->name('login');
Route::get('/learn',[HomeController::class, 'learn'])->name('learn');