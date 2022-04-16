<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DistrictResource extends JsonResource
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
            'areaid'=>$this->areaid,
            'regionid'=>$this->regionid,
            'nameru'=>$this->nameru,
            'nameuz'=>$this->nameuz,
            'lands'=>$this->lands_count
        ];
    }
}
