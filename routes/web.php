<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::get('/contact', [FeedbackController::class, 'create'])->name('contact');
Route::post('/contact', [FeedbackController::class, 'store'])->name('feedback.store');
