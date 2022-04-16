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
        $properties_query = "(SELECT l FROM (SELECT (select regnum from lands ll left join land_merge_data lmd on ll.id=lmd.merged_lot_id where ll.is_merged_lot=1 and lmd.merged_part_id=l.id) as merged_lot_regnum,(select area from lands ll left join land_merge_data lmd on ll.id=lmd.merged_lot_id where ll.is_merged_lot=1 and lmd.merged_part_id=l.id) as merged_lot_area,(select area from lands ll left join land_merge_data lmd on ll.id=lmd.merged_lot_id where ll.is_merged_lot=1 and lmd.merged_part_id=l.id) as merged_lot_area,(select created_at from lands ll left join land_merge_data lmd on ll.id=lmd.merged_lot_id where ll.is_merged_lot=1 and lmd.merged_part_id=l.id) as merged_lot_created_at, regnum, address, cad_number, area, region_id, district_id, register_number, l.created_at,l.is_merged_lot,l.is_merged_part, s.name AS status,s.code AS status_code,l.id) AS l)";
        $feature_query = sprintf("SELECT
                'Feature' As type,
                row_to_json(%s) As properties,
                ST_AsGeoJSON(lg.geometry)::json As geometry
            FROM land_geometries As lg
                LEFT JOIN lands l ON l.id = lg.land_id
                LEFT JOIN statuses s ON s.id = l.status_id
            WHERE land_id=%s order by l.parent_id NULLS FIRST", $properties_query, $this->id);
        $feature_collection_query = sprintf("SELECT 'FeatureCollection' As type, array_to_json(array_agg(f)) As features FROM (%s) As f", $feature_query);
        $query = sprintf("SELECT row_to_json(fc) AS geojson FROM (%s)  As fc LIMIT 1", $feature_collection_query);

        $geojson = DB::connection('ijaradb')->select($query);
        $result = reset($geojson);
        $geojson = json_decode($result->geojson);

        return [
            'id' => $this->id,
            'regnum' => $this->regnum,
            'address' => $this->address,
            'cad_number' => $this->cad_number,
            'area' => $this->area,
            'region' => $this->region,
            'land_merge_data' => $this->land_merge_data,
            'parent_id' => $this->parent_id,
            'district' => $this->district,
            'geometries' => $geojson,
            'created_at' => $this->created_at->format('d.m.Y'),
        ];
    }
}
