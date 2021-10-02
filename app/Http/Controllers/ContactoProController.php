<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoProController extends Controller
{

    public function index(){

        return view('web.programa');
    }
    
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'correo' =>'required|email',
            'empresa' =>'required',
            'celular' =>'required|numeric',
            'mensaje' =>'required'
        ]);

        $correo = new ContactoMailable($request->all());
        Mail::to('jesus.ramirez9@unmsm.edu.pe')->send($correo);

        return redirect()->route('web.programa')->with('info','Mensaje enviado');
    }
}
