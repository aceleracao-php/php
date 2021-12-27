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
            'resumo' => $this->resumo,
            'content' => $this->content
        ];*/
        return $this->resource->toArray();
    }

    public function with($request)
    {
        return [
            'extra_information' => 'Essa API esta no ambiente de [TESTE] | Warning: Not used in production'
        ];   
    }
}
