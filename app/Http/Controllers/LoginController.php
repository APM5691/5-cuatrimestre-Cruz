<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{

    public function validar(Request $request)
    {

        $correo = $request->input('correo_electronico');
        $pass = $request->input('password');

        $consulta = DB::SELECT("SELECT * FROM cliente WHERE correo_electronico = '$correo' AND password = '$pass'");

        if (count($consulta) == 0) {

            $error = true;
            echo'<script type="text/javascript">
            alert("Usuario/Contraseña son incorrectos o no existen");
            </script>';
            return view('templates.iniciar_sesion')
            ->with($error);

        } else {
            // return 'entrar';
            $request->session()->put('session_id', $consulta[0]->id);
            $request->session()->put('session_name', $consulta[0]->nombre_cliente);
            $request->session()->put('session_tipo', $consulta[0]->tipo_sesion);

            $session_id = $request->session()->get('session_id');
            $session_name = $request->session()->get('session_name');
            $session_tipo = $request->session()->get('session_tipo');


            
                    return view('templates.iniciar_sesion')
                    ->with($tipo = $session_tipo);
               
            
        }
    }

    public function logout(Request $request)
    {

        $request->session()->forget('session_id');
        $request->session()->forget('session_name');
        $request->session()->forget('session_tipo');

        return view('templates.iniciar_sesion');
    }

}
