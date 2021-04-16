<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class TipoDeJoya extends MongoModel
{
    use HasFactory;

    protected $table = 'tipo_de_joya';
    
    protected $fillable = [
        'tipo_joya'
        ];
}
