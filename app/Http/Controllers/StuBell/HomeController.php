<?php

namespace App\Http\Controllers\StuBell;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nama = 'Zahra';
        $data = ['namaku' => $nama];
        return view('StuBell.home', $data);
    }
    
}