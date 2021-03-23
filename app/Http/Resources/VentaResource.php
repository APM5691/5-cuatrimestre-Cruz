<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VentaResource extends JsonResource
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
            'monto_total' => $this->monto_total  ,
            'direcciones_id' => $this->direcciones_id  ,
            'clientes_id' => $this->clientes_id  ,
    ];
    }
}
