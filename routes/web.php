<?php

use App\Livewire\About;
use App\Livewire\Blog;
use App\Livewire\Contact;
use App\Livewire\Index;
use App\Livewire\Products;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    Route::get('/', Index::class)->name('home');
    Route::get('/about', About::class)->name('about');
    Route::get('/products', Products::class)->name('product');
    Route::get('/blog', Blog::class)->name('blog');
    Route::get('/contact', Contact::class)->name('contact');
});