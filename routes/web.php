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
Route::get('/order', function () {
    return view('order');
});
Route::get('/placeorder', function () {
    return view('placeorder');
});
Route::get('/admin', function () {
    return view('admin');
});
use App\Http\Controllers\OrderController;

Route::post('/admin', [OrderController::class, 'store'])->name('order.store');
Route::get('/admin', [OrderController::class, 'admin'])->name('admin.page');
use Illuminate\Http\Request;

Route::post('/placeorder', function (Request $request) {
    $options = $request->input('options', []);
    return view('placeorder', compact('options'));
});