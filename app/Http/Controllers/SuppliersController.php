<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function __construct(){
        $this->middleware(LogAcessMiddleware::class);
    }

    public function index(){
        return view('app.suppliers.index');
    }
}
