<?php

use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('site.index');
Route::post('/contact-us', [HomeController::class, 'contactUs'])->name('site.contact.us');
Route::get('change/{language}', [HomeController::class, 'changeLanguage'])->name('site.change.language');
