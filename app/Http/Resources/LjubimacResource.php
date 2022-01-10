<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LjubimacResource extends JsonResource
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
            'Tip: ' => $this->resource->tip,
            'Rasa: ' => $this->resource->rasa,
            'Ime: ' => $this->resource->ime,
            'Godine: ' => $this->resource->godine,
            'Vlasnik: ' => new VlasnikResource($this->resource->vlasnik)
        ];
    }
}
