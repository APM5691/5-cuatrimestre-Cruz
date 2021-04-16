<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    
    protected $fillable = [
        'nombre_cliente',
        'primer_apellido',
        'segundo_apellido',
        'password',
        'correo_electronico',
        'telefono',
        'sexo',
        'fecha_nacimiento',
        'matricula',
        'imagen',
        'tipo_sesion'
        ];
}
