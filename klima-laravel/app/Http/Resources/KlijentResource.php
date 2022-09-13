<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KlijentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID: ' => $this->resource->id,
            'Ime i prezime: ' => $this->resource->ime_prezime,
            'Adresa: ' => $this->resource->adresa,
            'Broj telefona: ' => $this->resource->broj_telefona
        ];
    }
}
