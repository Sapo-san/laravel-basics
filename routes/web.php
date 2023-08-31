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

Route::get('/wildcards/{something}', function($something) {
    return response('<h1>Wildcard in the URL: ' . $something . '</h1>');
});

Route::get('/helper/methods/dd/{something}', function($something) {
    dd($something);
    return response('<h1>Called DD</h1>');
});

Route::get('/helper/methods/ddd/{something}', function($something) {
    ddd($something);
    return response('<h1>Called Helper DDD</h1>');
});