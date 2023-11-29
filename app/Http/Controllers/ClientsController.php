<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function __construct(){
        $this->middleware(LogAcessMiddleware::class);
    }
}
