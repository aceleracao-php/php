<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArtigoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        /*return [
            'id' => $this->id,
            'title' => $this->title,
            'extra_information' => 'Essa API é de teste, não use em produção'
        ];*/
        return $this->resource->toArray();
    }
}
