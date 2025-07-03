<?php

use App\Models\Event;
use App\Livewire\Home;
use App\Livewire\Updates;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Livewire\Updates\Newsletter\NewsletterBlog;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. 
| 
|
*/

// Redirect root to home
Route::redirect('/', '/home');

// Main Pages
Route::get('/home', Home::class)->name('home');
Route::get('/about-us', fn () => view('about'))->name('about');
Route::get('/programs-and-services', fn () => view('programs'))->name('programs-and-services');
Route::get('/chairman-corner', fn () => view('chairman'))->name('chairman-corner');
Route::get('/contact-us', fn () => view('contact-us'))->name('contact-us');
Route::get('/champions', fn () => view('champion'))->name('champions');
Route::get('/privacy-policy', fn () => view('privacy'))->name('privacy-policy');

// Updates Section
Route::prefix('updates')->group(function () {
    Route::get('/', Updates::class)->name('updates');
    Route::get('/newsletters/{slug}', NewsletterBlog::class)->name('updates.show');
});

// Events
Route::get('events/{event:slug}/form', function (Event $event) {
    return view('event-form-submission', ['event' => $event]);
})->name('event-form');

// Payment Routes
Route::post('/pisopay/payment/callback', PaymentController::class)->withoutMiddleware('web')->name('pisopay-callback');
Route::get('/champion/payment/success-payment', fn () => view('payment-success'))->name('payment.success');

// Fallback 404 Route
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
})->name('not-found');