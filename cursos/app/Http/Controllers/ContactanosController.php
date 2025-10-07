<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Email
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }
    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'email' => 'required | email',
            'mensaje' => 'required'
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('arupakasan86@gmail.com')->send($correo);

        return redirect()->route('contactanos.index')->with('MsgContacto', 'Mensaje enviado');
    }
}
