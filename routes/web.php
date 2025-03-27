<?php

use App\Livewire\Home;
use App\Livewire\Updates;
use App\Livewire\Updates\Newsletter\NewsletterBlog;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', Home::class)->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/programs-and-services', function () {
    return view('programs');
})->name('programs-and-services');
Route::get('/chairman-corner', function () {
    return view('chairman');
})->name('chairman-corner');
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/updates', Updates::class)->name('updates');

Route::get('/updates/newsletters/{slug}', NewsletterBlog::class)->name('updates.show');