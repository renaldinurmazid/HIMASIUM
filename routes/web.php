<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

use App\Http\Controllers\ProductController;

Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::get('/contact', function () {
    return view('pages.contact.index');
})->name('contact');
