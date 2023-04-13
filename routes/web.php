<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/tmi', function () {
    return view('tmi');
});

Route::any('{query}', function() { return redirect('/'); })->where('query', '.*');
