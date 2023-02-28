<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

// We need to set a route to define the locale we want to use. 
Route::get('/setlocale/{locale}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('website.language');

Route::get('/', [WebsiteController::class, 'index']);

