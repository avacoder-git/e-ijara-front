<?php

namespace App\Http\Resources\Front;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class RegionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // dd($this->geometry);
        return [
            'regioncode' => $this->regioncode,
            'name' => $this->nameuz,
            // 'geometry' =>  DB::raw("ST_AsGeoJSON('$this->geometry')")
            'geometry' => $this->geometry,
        ];
    }
}
