<?php

namespace App\Http\Controllers;
use App\Exports\ProductosExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function export() 
    {
        return Excel::download(new ProductosExport, 'productos.xlsx');
    }
}
