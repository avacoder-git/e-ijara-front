<?php

namespace App\Http\Resources;

use App\Http\Resources\Front\LandIndexResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SavedLandCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function __construct($resource)
    {
        parent::__construct($resource);
    }

    public function toArray($request)
    {
        return [
            'data' => [
                'features' => SavedLandResource::collection($this->resource),
                "type"=> "FeatureCollection",
            ],
        ];
    }
}
