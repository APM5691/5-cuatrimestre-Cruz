<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductoCollection;
use App\Http\Resources\ProductoResource;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ProductoCollection(Producto::all());
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
            'clave' => 'required|string',
            'nombre_producto' => 'required|string|max:25',
            'numero_existencias' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
            'medida' => 'required',
            'precio_oferta' => 'required',
            'fotografia' => 'required'
        ]);
        $producto = Producto::create($request->except('id'));
        return new ProductoResource($producto);
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
            'clave' => 'required|string',
            'nombre_producto' => 'required|string|max:25',
            'numero_existencias' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
            'medida' => 'required',
            'precio_oferta' => 'required',
            'fotografia' => 'required'
        ]);
        $producto = Producto::findOrfail($id);
        $producto->update($request->only([
            'clave',
            'nombre_producto',
            'numero_existencias',
            'precio',
            'descripcion',
            'medida',
            'precio_oferta',
            'fotografia'
            ]));
            return new ProductoResource($producto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::findOrfail($id)->delete();
        return ['estatus' => true];
    }
}
