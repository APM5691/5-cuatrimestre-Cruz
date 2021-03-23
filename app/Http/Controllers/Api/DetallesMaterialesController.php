<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DetalleMaterialCollection;
use App\Http\Resources\DetalleMaterialResource;
use App\Models\DetalleMaterial;
use Illuminate\Http\Request;

class DetallesMaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new DetalleMaterialCollection(DetalleMaterial::all());
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
        'material_principal' => 'required',                   
        'material_secundario' => 'required',                  
        'material_id' => 'required',                  
        'producto_id' => 'required', 
        ]);
        $detalle_material = DetalleMaterial::create($request->all());
        return new DetalleMaterialResource($detalle_material);
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
            'material_principal' => 'required',                   
            'material_secundario' => 'required',                  
            'material_id' => 'required',                  
            'producto_id' => 'required', 
        ]);
        $producto = DetalleMaterial::findOrfail($id);
        $producto->update($request->only([
            'material_principal',                   
            'material_secundario',                  
            'material_id',                  
            'producto_id', 
            ]));
            return new DetalleMaterialResource($producto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DetalleMaterial::findOrfail($id)->delete();
        return ['estatus' => true];
    }
}
