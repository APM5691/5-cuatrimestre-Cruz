<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use PDF;

class PDFController extends Controller
{
     public function generatePDF()
    {

        $data = Producto::all();
        
        view()->share('prueba',$data);  
        $pdf = PDF::loadView('productos_pdf', $data);
    
        return $pdf->download('productos.pdf');
     // return dd($data);
    }
}
