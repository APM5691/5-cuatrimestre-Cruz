<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DetalleVentaResource extends JsonResource
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
            'cantidad' => $this->cantidad,
            'sub_total' => $this->sub_total,
            'venta_id' => $this->venta_id,
            'producto_id' => $this->producto_id ];


    }
}
