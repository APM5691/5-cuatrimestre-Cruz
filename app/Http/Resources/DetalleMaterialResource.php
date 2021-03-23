<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DetalleMaterialResource extends JsonResource
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
            'id' => $this->id,
            'material_principal' => $this->material_principal,                   
            'material_secundario' => $this->material_secundario,                  
            'material_id' => $this->material_id,                  
            'producto_id' => $this->producto_id 
        ];
    }
}
