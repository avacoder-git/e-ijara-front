<?php

namespace App\Http\Resources\Front;

use Illuminate\Http\Resources\Json\ResourceCollection;

class LandCollection extends ResourceCollection
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
            'data' => LandResource::collection($this->collection)
        ];
    }
}
