<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\mail;
use App\Mail\EnviarMail;

class MailController extends Controller
{
    public function enviar(Request $req){
        $data=array(
            'asunto'=>'Confirmación de mensaje de ayuda',
            'nombre'=>$req->nombre,
            'email'=>$req->correo,
            'mensaje'=>$req->comentarios,
            'file'=>$req->file('file'),
            'email2'=>'al221910421@gmail.com',
    );

    Mail::to($req->correo)->send(new EnviarMail($data));

    return view('layouts.index');
    }
}
