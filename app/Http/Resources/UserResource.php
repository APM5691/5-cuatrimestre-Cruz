<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => $this->id
            , 'name' => $this->name
            , 'primer_apellido' => $this->primer_apellido
            , 'segundo_apellido' => $this->segundo_apellido
            , 'sexo' => $this->sexo
            , 'fecha_nacimiento' => $this->fecha_nacimiento
            , 'estatus' => $this->estatus
            , 'perfil' => $this->perfil
            , 'email' => $this->email
            , 'fotografia' => $this->fotografia
            ];
            
    }
}
