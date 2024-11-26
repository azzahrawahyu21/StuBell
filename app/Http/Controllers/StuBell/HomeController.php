<?php

namespace App\Http\Controllers\StuBell;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return '<h1>Halo dari controller</h1>';
    }
}
