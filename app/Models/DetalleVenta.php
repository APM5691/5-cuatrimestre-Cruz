<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class DetalleVenta extends Model
{
    use HasFactory;

    protected $table = 'detalle_venta';
    
    protected $fillable = [
        'id',                   
        'cantidad',                   
        'sub_total',                  
        'venta_id',                  
        'producto_id',                               
        ];
}
