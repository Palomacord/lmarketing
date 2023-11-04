<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('site.contact');
    }

    public function contact(string $name){

        return view('site.contact',['name' => $name]);
    }
}
