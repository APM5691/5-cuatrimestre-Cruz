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
        return[
        'clave'=> Str::random(25), 
        'producto' => $this->faker->text(rand(100,200)),
        'existencias' => $this->faker->randomNumber(3,true),
        'precio_unitario' => $this->faker->randomFloat(2,5,100),
        'unidad_medida' => $this->faker->randomElement(['Pieza', 'Caja', 'Kilogramo', 'Metro', 'Bolsa', 'Otro']),
        'estatus' => $this->faker->randomElement(['Activo', 'Inactivo'])
          ];
        }

}

