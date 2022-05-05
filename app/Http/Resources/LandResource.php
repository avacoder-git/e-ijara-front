<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class LandResource extends JsonResource
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
            'id' => $this->id,
            'regnum' => $this->regnum,
            'cad_number' => $this->cad_number,
            'area' => round($this->area,1),
            'region' => $this->region->nameuz,
            'district' => $this->district->nameuz,
            'created_at' => $this->created_at->format('d.m.Y'),
        ];
    }
}
