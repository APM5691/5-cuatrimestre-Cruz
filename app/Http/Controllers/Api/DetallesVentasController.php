<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DetalleVentaCollection;
use App\Http\Resources\DetalleVentaResource;
use App\Models\DetalleVenta;
use Illuminate\Http\Request;

class DetallesVentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new DetalleVentaCollection(DetalleVenta::all());
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
            'cantidad' => 'required',                   
            'sub_total' => 'required',                  
            'venta_id' => 'required',                  
            'producto_id' => 'required', 
            ]);
            $detalle_venta = DetalleVenta::create($request->all());
            return new DetalleVentaResource($detalle_venta);
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
            'cantidad' => 'required',                   
            'sub_total' => 'required',                  
            'venta_id' => 'required',                  
            'producto_id' => 'required', 
        ]);
        $detalle_venta = DetalleVenta::findOrfail($id);
        $detalle_venta->update($request->only([
            'cantidad',                   
            'sub_total',                  
            'venta_id',                  
            'producto_id', 
            ]));
            return new DetalleVentaResource($detalle_venta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DetalleVenta::findOrfail($id)->delete();
        return ['estatus' => true];
    }
}
