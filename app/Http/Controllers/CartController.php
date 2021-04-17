<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Cart;
use App\ProductosModel;


class CartController extends Controller
{
    
    public function add(Request $request){
     $usus = Producto::all();
      $producto = Producto::find($request->producto_id);
        
        Cart::add(
            $producto->id, 
            $producto->nombre_producto, 
            $producto->precio, 
            1,   
        );

        return view('templates.carrito')
        ->with(['usus' => $usus]);
   
    }

    public function cart(){
        
        return view('checkout');
    }

    public function removeitem(Request $request) {
        //$producto = Producto::where('id', $request->id)->firstOrFail();
        Cart::remove(['id' => $request->id]);
        return back()->with('success',"Producto eliminado con éxito de su carrito.");
    }

    public function clear(){
        Cart::clear();
        return back()->with('success',"The shopping cart has successfully beed added to the shopping cart!");
    }

}