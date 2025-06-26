<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app2');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/work', function () {
    return view('work');
});
Route::get('/center', function () {
    return view('center');
});