<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index(Request $request){
       // dd($request->all());
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->mensage = $request->input('mensage');
       // print_r($contact->getAttributes());
        $contact->save();

        //outra forma
        //$contact->fill($request->all());
         //$contact->create($request->all());
        return view('site.contact');
    }

    public function contact(string $name){

        return view('site.contact',['name' => $name]);
    }
}
