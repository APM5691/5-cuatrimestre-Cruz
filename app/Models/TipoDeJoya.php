<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDeJoya extends Model
{
    use HasFactory;

    protected $table = 'tipo_de_joya';
    
    protected $fillable = [
        'tipo_joya'
        ];
}
