<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensageController extends Controller
{
    public function return(){
        return view('site.mensage',['title'=> 'Produto']);
    }
}
