<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\StuBell\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class,'index']);

Route::get('/study', function () {
    return view("study.app");
});

Route::get('/', [Dashboard::class,'index']);