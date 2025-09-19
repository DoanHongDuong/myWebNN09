<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Duong; // import đúng tên class

Route::get('/', function () {
    return view('welcome');
});

// //Route::get('/webn09', function () {
//     return view('hi');
// });

// // Route gọi Controller
// //Route::get('/testController', [Duong::class, 'test']);

// Hiển thị danh sách
Route::get('/hienthiSinhVien', 'App\Http\Controllers\SinhvienController@index')
    ->name('sinhvien.index');

// Danh sách Student
Route::get('/student', 'App\Http\Controllers\StudentController@readStudent')
    ->name('student.index');

// Edit student
Route::get('/editStudent/{id}','App\Http\Controllers\StudentController@editStudent')
    ->name('editStudent');

// Save student
Route::post('/saveStudent', 'App\Http\Controllers\StudentController@saveStudent')
    ->name('student.save');