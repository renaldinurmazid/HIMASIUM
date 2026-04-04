<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.index');
})->name('home');

Route::get('/blog', function () {
    return view('pages.blog.index');
})->name('blog');

Route::get('/blog/{slug}', function ($slug) {
    $post = \App\Models\Post::where('slug', $slug)->firstOrFail();
    return view('pages.blog.show', compact('post'));
})->name('blog.show');

Route::get('/product', function () {
    return view('pages.product.index');
})->name('product');

Route::get('/contact', function () {
    return view('pages.contact.index');
})->name('contact');
