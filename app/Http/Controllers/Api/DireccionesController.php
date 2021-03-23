<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DireccionCollection;
use App\Http\Resources\DireccionResource;
use App\Models\Direccion;
use Illuminate\Http\Request;

class DireccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new DireccionCollection(Direccion::all());
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
            "clientes_id"=>   'required',          
            "calle"=> 'required',
            "numero"=>     'required',        
            "localidad"=> 'required',
            "municipio"=> 'required',
            "estado"=> 'required',
        ]);
        $producto = Direccion::create($request->all());
        return new DireccionResource($producto);
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
            "clientes_id"=>   'required',          
            "calle"=> 'required',
            "numero"=>     'required',        
            "localidad"=> 'required',
            "municipio"=> 'required',
            "estado"=> 'required',
        ]);
        $direccion = Direccion::findOrfail($id);
        $direccion->update($request->only([
            "clientes_id" ,          
            "calle" ,
            "numero" ,        
            "localidad" ,
            "municipio" ,
            "estado" ,
            ]));
            return new DireccionResource($direccion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Direccion::findOrfail($id)->delete();
        return ['estatus' => true];
    }
}
