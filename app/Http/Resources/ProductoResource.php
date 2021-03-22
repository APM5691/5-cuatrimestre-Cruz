<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
                'id' => $this->id  ,
                'clave' => $this->clave  ,
                'nombre_producto' => $this->nombre_producto  ,
                'numero_existencias' => $this->numero_existencias  ,
                'precio' => $this->precio  ,
                'descripcion' => $this->descripcion  ,
                'medida' => $this->medida  ,
                'precio_oferta' => $this->precio_oferta  ,
                'fotografia' => $this->fotografia 
                // 'tipo_de_joya_id' => $this->tipo_de_joya_id  
        ];
    }
}
