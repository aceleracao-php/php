<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ArtigoResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
           'data' => $this->collection
        ];
    }

    public function with($request)
    {
        return [
            "extra_information" => "API na versão 5.0 é instavel com PHP 5.6"
        ];
    }
}
