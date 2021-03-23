<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DireccionResource extends JsonResource
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
            'clientes_id' => $this->clientes_id,
            'calle' => $this->calle,
            'numero' => $this->numero,
            'localidad' => $this->localidad,
            'municipio' => $this->municipio,
            'estado' => $this->estado];
    }
}
