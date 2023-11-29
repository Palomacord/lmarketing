<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Contact;
use App\Http\Middleware\LogAcessMiddleware;

class ContactController extends Controller
{

    public function __construct(){
        $this->middleware(LogAcessMiddleware::class);
    }
    public function index(Request $request){
       // dd($request->all());
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->mensage = $request->input('mensage');


        //$contact->validate([
            //'email' => 'email'
        //]);
        if($contact->name){
            $contact->save();
            return redirect()->route('site.confirm');
        }

        //outra forma
        //$contact->fill($request->all());
        //$contact->create($request->all());
        //return view('site.contact');
        return view('site.contact');
    }

    public function contact(string $name){

        return view('site.contact',['name' => $name]);
    }
}
