<?php

namespace App\Exports;

use App\Models\Producto;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
        public function headings(): array
    {
        return [
            'id',
            'clave',
            'nombre_producto',
            'numero_existencias',
            'precio',
            'descripcion',
            'medida',
            'precio_oferta',
            'fotografia',
             'fotografia',
              'fotografia', 
              'fotografia'
        ];
    }
    public function collection()
    {
        return Producto::all();
    }
}
