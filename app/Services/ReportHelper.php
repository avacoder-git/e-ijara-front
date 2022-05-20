<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class ReportHelper
{
    public static function getOrganizationStatByRegion($district)
    {
        $query = "select l.id from lands l
            where l.status_id = 3 and (l.parent_id is not null and l.is_merged_lot = 0 or l.is_merged_lot = 1)";
        $query .= " and l.district_id = " . $district;
        return $query;
    }

    public static function getHokimyatCount($district)
    {
        $query = "select l.id from lands l where l.status_id not in (25)  and l.parent_id is not null and l.is_merged_lot = 0 or l.is_merged_lot = 1";
        $query .= " and l.district_id = " . $district;
        return $query;
    }

    public static function getOrganizationStatByRegionAnswers($district)
    {
        $query = "select ro.land_id from reviews ro inner join lands l ON l.id = ro.land_id where l.status_id not in (3,25)
                  and  (l.parent_id is not null and l.is_merged_lot = 0 or l.is_merged_lot = 1)";
        $query .= " and l.district_id = " . $district;
        return $query;
    }

    public static function getInventoryData($district)
    {
        $query = "select lid.land_id from land_inventory_data lid left join lands l ON l.id = lid.land_id where
                (l.parent_id is null and l.is_merged_lot = 0 or l.is_merged_lot = 1)  and l.status_id not in (25) ";
        $query .= " and l.district_id = " . $district;
        return $query;
    }

    public static function getLandCountByRegion($district)
    {
        $query = "select l.id from lands l where (l.parent_id is not null and l.is_merged_lot = 0 or l.is_merged_lot = 1)
                  and l.status_id not in (25)";
        $query .= " and l.district_id = " . $district;
        return $query;
    }

    public static function GetSuvli($district)
    {
        $query = " SELECT l.id FROM lands l LEFT JOIN land_contours lc ON l.id=lc.land_id where lc.land_extra_irragation = '1'
        and (l.parent_id is not null and l.is_merged_lot = 0) and l.status_id not in (25)
        AND l.person_type = 'J'";
        $query .= " and l.district_id = " . $district;
        return $query;
    }

    public static function GetSuvliAreasUsed($district)
    {
        $query = "select l.id from lands l left join land_contours lc ON l.id = lc.land_id where lc.land_extra_irragation = '1'
                  and l.status_id not in (25)";
        $query .= " and l.district_id = " . $district;
        return $query;
    }

    public static function GetSuvliAreas($district)
    {
        $query = "select  lid.land_id from land_inventory_data lid left join lands l ON l.id = lid.land_id
                where l.parent_id is null and l.status_id not in (25)";
        $query .= " and l.district_id = " . $district;
        return $query;
    }


    public static function GetHokimyatImzolandi($district)
    {
        $query = "select l.id from lands l  left join land_contours lc on l.id = lc.land_id where
                (l.parent_id is not null and l.is_merged_lot = 0 or l.is_merged_lot = 1) and l.status_id not in (25)";
        $query .= " and l.district_id = " . $district;
        return $query;
    }

}
