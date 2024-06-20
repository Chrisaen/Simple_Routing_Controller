<?php

use Illuminate\Support\Facades\Route;


Route::get('/about-me', function () {
    return view('about');
})->name('about');


Route::get('/skills', function () {
    return view('skills');
})->name('skills');


Route::get('/hobbies', function () {
    return view('hobbies');
})->name('hobbies');
