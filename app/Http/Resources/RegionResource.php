<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'regionid' => $this->regionid,
            'nameru' => $this->nameru,
            'nameuz' => $this->nameuz,
            'districts'=> DistrictResource::collection($this->Districts),
            'lands' => $this->lands_count
        ];
    }
}
