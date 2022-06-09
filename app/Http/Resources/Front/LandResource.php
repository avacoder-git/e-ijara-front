<?php

namespace App\Http\Resources\Front;

use App\Models\LandAuctionLot;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class LandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $date = Carbon::make($this->updated_at);
        return [
            'id' => $this->id,
            'area' => $this->area,
            'regnum' => $this->regnum,
            'address' => $this->address,
            'updated_at' => $date->format("d.m.Y"),
            'auction_lot' => LandAuctionLot::find($this->id)
        ];
    }
}
