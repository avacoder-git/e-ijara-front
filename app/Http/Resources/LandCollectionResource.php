<?php

namespace App\Http\Resources;

use App\Http\Resources\Front\LandIndexResource;
use Illuminate\Http\Resources\Json\JsonResource;

class LandCollectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function __construct($resource, $cad_num)
    {
        $this->cad_num = $cad_num;
        parent::__construct($resource);
    }

    public function toArray($request)
    {
        return [
            'data' => LandIndexResource::collection($this->resource),
            'cad_num' => $this->cad_num
        ];
    }
}
