<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        ];
}
