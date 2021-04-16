<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class DetalleMaterial extends Model
{
    use HasFactory;

    protected $table = 'detalle_material';
    
    protected $fillable = [
        'id',                   
        'material_principal',                   
        'material_secundario',                  
        'material_id',                  
        'producto_id',                               
        ];
}
