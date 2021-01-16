<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $arrays = range(0,100);
        foreach ($arrays as $valor) {
          DB::table('producto')->insert([
        'id'=> rand(10, 9999), 
        'clave'=> rand(1, 500),
        'producto' => Str::random(10),
        'existencias' => 2,
        'precio_unitario' => 10.1,
        'unidad_medida' => "Pieza",
        'estatus' => "Activo"
          ]);
        }

    }
}
