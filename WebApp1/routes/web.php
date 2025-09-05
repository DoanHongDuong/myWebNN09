<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Duong; // import đúng tên class

Route::get('/', function () {
    return view('welcome');
});

Route::get('/webn09', function () {
    return view('hi');
});

// Route gọi Controller
Route::get('/testController', [Duong::class, 'test']);
