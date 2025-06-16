<?php

use App\Models\Event;
use App\Livewire\Home;
use App\Livewire\Updates;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Livewire\Updates\Newsletter\NewsletterBlog;


Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', Home::class)->name('home');


Route::get('/about-us', function () {
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

Route::get('/champions', function () {
    return view('champion');
})->name('champions');

Route::get('/updates', Updates::class)->name('updates');

Route::get('/updates/newsletters/{slug}', NewsletterBlog::class)->name('updates.show');

Route::get('/privacy-policy', function() {
    return view('privacy');
})->name('privacy-policy');

Route::get('events/{event:slug}/form', function (Event $event) {
    return view('event-form-submission', ['event' => $event]);
})->name('event-form');



//callback route

Route::post('/pisopay/payment/callback', PaymentController::class)->name('pisopay-callback');




Route::fallback(function () {
    return response()->view('errors.404', [], 404);
})->name('not-found');
