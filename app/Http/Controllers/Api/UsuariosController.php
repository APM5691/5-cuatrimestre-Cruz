<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;
use App\Models\User;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new UserCollection(User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:25', 'primer_apellido' => 'required|string|max:25', 'segundo_apellido' => 'bail|nullable|string|max:25', 'fecha_nacimiento' => 'required|date_format:Y-m-d', 'sexo' => 'required|in:Femenino,Masculino,Prefiere no decirlo', 'perfil' => 'required|in:Administrador,Operador,Mecánico', 'estatus' => 'required|in:Activo,Inactivo', 'email' => 'required|email|unique:users,email', 'password' => 'required|min:8'
        ]);
        $request->merge(['password' => bcrypt($request->password)]);
        $usuario = User::create($request->all());
        return new UserResource($usuario);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:25', 'primer_apellido' => 'required|string|max:25', 'segundo_apellido' => 'bail|nullable|string|max:25', 'fecha_nacimiento' => 'required|date_format:Y-m-d', 'sexo' => 'required|in:Femenino,Masculino,Prefiere no decirlo', 'perfil' => 'required|in:Administrador,Operador,Mecánico', 'estatus' => 'required|in:Activo,Inactivo', 'email' => 'required|email|unique:users,email', 'password' => 'required|min:8'
        ]);
        $usuario = User::findOrfail($id);
        $request->merge(['password' => $request->password  ? bcrypt($request->password) :  $usuario->password]);
        $usuario->update($request->only([
                'name' ,
                'primer_apellido' ,
                'segundo_apellido' ,
                'fecha_nacimiento',
                'sexo',
                'perfil',
                'estatus',
                'email',
                'password'
            ]));
            return new UserResource($usuario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrfail($id)->delete();
        return ['estatus' => true];
    }
}
