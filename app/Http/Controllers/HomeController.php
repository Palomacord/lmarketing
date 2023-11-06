<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('site.index');
    }

    public function index(){
        return view('site.index');
    }
}
