<?php

namespace App\Http\Resources\Front;

use Illuminate\Http\Resources\Json\JsonResource;

class LandIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {


        return
            [
                'geometry' => json_decode($this->st_asgeojson),
                "properties" => [
                    "name" => "Многоугольник 1",
                    "id" => $this->id,
                    "area" => $this->area,
                ],

                'type' => "Feature",

            ];
    }
}
