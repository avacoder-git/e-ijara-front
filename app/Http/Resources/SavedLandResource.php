<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SavedLandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' =>  $this->land? $this->land->id:null,
            'regnum' => $this->land?$this->land->regnum:null,
            'cad_number' => $this->land?$this->land->cad_number:null,
            'area' =>$this->land? round($this->land->area,1):null,
            'region' => $this->land?$this->land->region->nameuz:null,
            'district' => $this->land?$this->land->district->nameuz:null,
            'created_at' =>$this->land? $this->land->created_at->format('d.m.Y'):null,
        ];
    }
}
