<?php

use App\Http\Controllers\StuBell\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('StuBell.home');
// });

Route::get('/home', [HomeController::class,'index']);