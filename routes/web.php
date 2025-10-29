<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallbackController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteController;

// Main Routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Callback Routes
Route::get('/callbacks', [CallbackController::class, 'index'])->name('callback.index');
Route::post('/request-callback', [CallbackController::class, 'store'])->name('callback.store');

// Contact Form Submission
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');


Route::post('/request-quote', [QuoteController::class, 'store'])->name('quote.store');
