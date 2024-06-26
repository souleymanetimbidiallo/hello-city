<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
})->name('app_home');

Route::get('/about-us', function (){
    return view('pages.about');
})->name('app_about');

Route::get('/help', function (){
    return view('pages.help');
})->name('app_help');

Route::get('/towns', function(){
    $towns  = App\Models\Township::all();

    return view('pages.towns')->withTowns($towns); 
});


