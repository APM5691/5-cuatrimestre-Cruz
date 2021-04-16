<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class Direccion extends MongoModel
{
    use HasFactory;

    protected $table = 'direccion';
    
    protected $fillable = [
            'id',
            'clientes_id',
            'calle',
            'numero',
            'localidad',
            'municipio',
            'estado' 
        ];
}
