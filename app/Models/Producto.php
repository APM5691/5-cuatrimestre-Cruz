<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Producto extends Model
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $table = 'producto';

    protected $fillable = [
        'clave',
        'nombre_producto',
        'numero_existencias',
        'precio',
        'descripcion',
        'medida',
        'precio_oferta',
        'fotografia',
        'tipo_de_joya_id'
    ];

    public function scopeBuscar($query,$buscar){
        if (trim($buscar != "")) {
            $query->where(\DB::raw("nombre_producto"), "LIKE", "%".$buscar."%");
        }
        }
}
