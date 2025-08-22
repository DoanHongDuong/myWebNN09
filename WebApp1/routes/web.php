<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/webn09', function () {
    return view('hi');
});
Route::get('/testController', function () {
    return view('hi');
});
Route::get('/testController', 'App\Http\Controllers\webN09@test');
