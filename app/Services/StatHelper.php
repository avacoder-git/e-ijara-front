<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class StatHelper
{
    public static function getOrganizationStatByRegion($region_id = null, $district_id = null)
    {

        $query = "select
                   count(case when (ro.organization_id in (3, 4)) then 1 end)                            as kadastr_count,
                   sum(case when (ro.organization_id in (3, 4)) then l.area end)                         as kadastr_area,
                   count(case when (l.person_type = 'J' and ro.organization_id in (3, 4)) then 1 end)    as kadastr_d_count,
                   sum(case when (l.person_type = 'J' and ro.organization_id in (3, 4)) then l.area end) as kadastr_d_area,

                   count(case when (ro.organization_id = 2) then 1 end)                                  as suv_count,
                   sum(case when (ro.organization_id = 2) then l.area end)                               as suv_area,
                   count(case when (l.person_type = 'J' and ro.organization_id = 2) then 1 end)          as suv_d_count,
                   sum(case when (l.person_type = 'J' and ro.organization_id = 2) then l.area end)       as suv_d_area,

                   count(case when (ro.organization_id = 1) then 1 end)                                  as qishloq_count,
                   sum(case when (ro.organization_id = 1) then l.area end)                               as qishloq_area,
                   count(case when (l.person_type = 'J' and ro.organization_id = 1) then 1 end)          as qishloq_d_count,
                   sum(case when (l.person_type = 'J' and ro.organization_id = 1) then l.area end)       as qishloq_d_area,


                   count(case when (ro.organization_id in (1,2,3,4)) then 1 end)                                 as idora_all_count,
                   sum(case when (ro.organization_id in (1,2,3,4)) then l.area end)                               as idora_all_area,
                   count(case when (l.person_type = 'J' and ro.organization_id in (1,2,3,4)) then 1 end)          as idora_all_d_count,
                   sum(case when (l.person_type = 'J' and ro.organization_id in (1,2,3,4)) then l.area end)       as idora_all_d_area



            from review_orgnizations ro
                     inner join lands l ON l.id = ro.land_id
            where l.status_id = 3 and (l.parent_id is not null and l.is_merged_lot = 0 or l.is_merged_lot = 1)";


        if (!is_null($region_id)) {

            $query .= " and l.region_id = " . $region_id;
        }

        if (!is_null($district_id))
            $query .= " and l.district_id = " . $district_id;

        $result = DB::connection('ijaradb')->select($query);

        return $result[0];
    }

    public static function getHokimyatCount($region_id = null, $district_id = null)
    {

        $query = "select
                   count(case when (l.status_id in (5,11,12,13,14,15,16,17,18,19,26,27,28)) then 1 end)                            as hokimyatda_count,
                   sum(case when (l.status_id in (5,11,12,13,14,15,16,17,18,19,26,27,28)) then l.area end)                         as hokimyatda_area,
                   count(case when (l.person_type = 'J' and (l.status_id in (5,11,12,13,14,15,16,17,18,19,26,27,28))) then 1 end)    as hokimyatda_d_count,
                   sum(case when (l.person_type = 'J' and (l.status_id in (5,11,12,13,14,15,16,17,18,19,26,27,28))) then l.area end) as hokimyatda_d_area,


                  count(case when (l.status_id in (5,11,13,14,15,16,17,18,19,26,27,28)) then 1 end)                            as hokimyatda_tasdiqlangan_count,
                  sum(case when (l.status_id in (5,11,13,14,15,16,17,18,19,26,27,28)) then l.area end)                         as hokimyatda_tasdiqlangan_area,
                  count(case when (l.person_type = 'J' and l.status_id in (5,11,13,14,15,16,17,18,19,26,27,28)) then 1 end)    as hokimyatda_tasdiqlangan_d_count,
                  sum(case when (l.person_type = 'J' and l.status_id in (5,11,13,14,15,16,17,18,19,26,27,28)) then l.area end) as hokimyatda_tasdiqlangan_d_area,


                 count(case when (l.status_id = 5) then 1 end)                            as hokimyatda_jarayonda_count,
                  sum(case when (l.status_id = 5) then l.area end)                         as hokimyatda_jarayonda_area,
                  count(case when (l.person_type = 'J' and l.status_id = 5) then 1 end)    as hokimyatda_jarayonda_d_count,
                  sum(case when (l.person_type = 'J' and l.status_id = 5) then l.area end) as hokimyatda_jarayonda_d_area,

                   count(case when (l.status_id = 26) then 1 end)                            as viloyat_hokim_shakillantirish_count,
                  sum(case when (l.status_id = 26) then l.area end)                         as viloyat_hokim_shakillantirish_area,
                  count(case when (l.person_type = 'J' and l.status_id = 26) then 1 end)    as viloyat_hokim_shakillantirish_count,
                  sum(case when (l.person_type = 'J' and l.status_id = 26) then l.area end) as viloyat_hokim_shakillantirish_d_area

            from lands l
            where l.status_id not in (25)  and l.parent_id is not null and l.is_merged_lot = 0 or l.is_merged_lot = 1";


        if (!is_null($region_id)) {

            $query .= " and l.region_id = " . $region_id;
        }

        if (!is_null($district_id))
            $query .= " and l.district_id = " . $district_id;

        $result = DB::connection('ijaradb')->select($query);

        return $result[0];
    }

    public static function getOrganizationStatByRegionAnswers($region_id = null, $district_id = null)
    {

        $query = "select             count(case when (ro.organization_id in (3, 4) and ro.answer = 1 ) then 1 end)          as kadastr_count_agreed,
                   sum(case when (ro.organization_id in (3, 4) and ro.answer = 1 ) then l.area end)                         as kadastr_area_agreed,
                   count(case when (l.person_type = 'J' and ro.organization_id in (3, 4) and ro.answer = 1 ) then 1 end)    as kadastr_d_count_agreed,
                   sum(case when (l.person_type = 'J' and ro.organization_id in (3, 4)  and ro.answer = 1) then l.area end) as kadastr_d_area_agreed,

                   count(case when (ro.organization_id = 2 and ro.answer = 1 ) then 1 end)                                  as suv_count_agreed,
                   sum(case when (ro.organization_id = 2 and ro.answer = 1) then l.area end)                               as suv_area_agreed,
                   count(case when (l.person_type = 'J' and ro.organization_id = 2 and ro.answer = 1) then 1 end)          as suv_d_count_agreed,
                   sum(case when (l.person_type = 'J' and ro.organization_id = 2 and ro.answer = 1) then l.area end)       as suv_d_area_agreed,

                   count(case when (ro.organization_id = 1 and ro.answer = 1 ) then 1 end)                                  as qishloq_count_agreed,
                   sum(case when (ro.organization_id = 1 and ro.answer = 1) then l.area end)                               as qishloq_area_agreed,
                   count(case when (l.person_type = 'J' and ro.organization_id = 1 and ro.answer = 1) then 1 end)          as qishloq_d_count_agreed,
                   sum(case when (l.person_type = 'J' and ro.organization_id = 1 and ro.answer = 1 ) then l.area end)       as qishloq_d_area_agreed

           from reviews ro
                     inner join lands l ON l.id = ro.land_id
            where l.status_id not in (3,25) and  (l.parent_id is not null and l.is_merged_lot = 0 or l.is_merged_lot = 1)";


        if (!is_null($region_id)) {

            $query .= " and l.region_id = " . $region_id;
        }

        if (!is_null($district_id))
            $query .= " and l.district_id = " . $district_id;

        $result = DB::connection('ijaradb')->select($query);

        return $result[0];
    }

    public static function getInventoryData($region_id = null, $district_id = null)
    {
        $query = "select count(case when (lid.arable_areas_with_water > 0) then 1 end) as inventory_count,
                   sum(case when (lid.arable_areas_with_water > 0) then l.area end) as inventory_area
            from land_inventory_data lid
            left join lands l ON l.id = lid.land_id
            where (l.parent_id is null and l.is_merged_lot = 0 or l.is_merged_lot = 1)  and l.status_id not in (25) ";

        if (!is_null($region_id))
            $query .= " and l.region_id = " . $region_id;

        if (!is_null($district_id))
            $query .= " and l.district_id = " . $district_id;

        $result = DB::connection('ijaradb')->select($query);

        return $result[0];

    }

    public static function getLandCountByRegion($region_id = null, $district_id = null)
    {
        $query = "select count(l.id) as count,
               sum(l.area) as area,
               count(case when l.person_type = 'J'  THEN 1
                    END) as d_count,
               sum(case when l.person_type = 'J'  THEN l.area
                    END) as d_area,

               count(case when l.status_id = 5 then 1 end) as hokim_count,
               sum(case when l.status_id = 5 then l.area end) as hokim_area,
               count(case when l.status_id = 5 and l.person_type = 'J' then 1 end) as hokim_d_count,
               sum(case when l.status_id = 5 and l.person_type = 'J' then l.area end) as hokim_d_area,

               count(case when l.status_id in(14,16,17) then 1 end) as auksion_count,
               sum(case when l.status_id in(14,16,17) then l.area end) as auksion_area,
               count(case when l.status_id in(14,16,17) and l.person_type = 'J' then 1 end) as auksion_d_count,
               sum(case when l.status_id in(14,16,17) and l.person_type = 'J' then l.area end) as auksion_d_area,

               count(case when l.order_statuses_id = 6 then 1 end) as auksion_finish_count,
               sum(case when l.order_statuses_id = 6 then l.area end) as auksion_finish_area,
               count(case when l.order_statuses_id = 6 and l.person_type = 'J' then 1 end) as auksion_finish_d_count,
               sum(case when l.order_statuses_id = 6 and l.person_type = 'J' then l.area end) as auksion_finish_d_area,



                    count(case when l.status_id in (26,27,28,29,30,31,32) and l.person_type = 'J' then 1 end) as auksion_shartnomaimzolangan_count,
                    sum(case when l.status_id in (26,27,28,29,30,31,32) and l.person_type = 'J' then l.area end) as auksion_shartnomaimzolangan_area,


               count(case when l.status_id in (26,27) then 1 end) as auksion_shartnomaimzolangan_kutilmoqda_count,
               sum(case when l.status_id in (26,27) then l.area end) as auksion_shartnomaimzolangan_kutilmoqda_area,
               count(case when l.status_id in (26,27) and l.person_type = 'J' then 1 end) as auksion_shartnomaimzolangan_kutilmoqda_d_count,
               sum(case when l.status_id in (26,27) and l.person_type = 'J' then l.area end) as auksion_shartnomaimzolangan_kutilmoqda_d_area,


               count(case when l.status_id = 15 then 1 end) as auksion_return_count,
               sum(case when l.status_id = 15 then l.area end) as auksion_return_area,
               count(case when l.status_id = 15 and l.person_type = 'J' then 1 end) as auksion_return_d_count,
               sum(case when l.status_id = 15 and l.person_type = 'J' then l.area end) as auksion_return_d_area,



               count(case when l.status_id = 26 then 1 end) as shartnoma_imzolandi_count,
               sum(case when l.status_id = 26 then l.area end) as shartnoma_imzolandi_area,
               count(case when l.status_id = 27  then 1 end) as shartnoma_imzolanishi_kutulmoqda_count,
               sum(case when l.status_id = 27  then l.area end) as shartnoma_imzolanishi_kutulmoqda_area,


                 count(case when (l.status_id = 26) then 1 end)                            as viloyat_hokim_shakillantirish_count,
                  sum(case when (l.status_id = 26) then l.area end)                         as viloyat_hokim_shakillantirish_area,

                   count(case when (l.status_id in (26,27)) then 1 end)                            as viloyat_hokim_shakillantirish_kutulmoqda_count,
                  sum(case when (l.status_id in (26,27)) then l.area end)                         as viloyat_hokim_shakillantirish_kutulmoqda_area


        from lands l
        where
              (l.parent_id is not null and l.is_merged_lot = 0 or l.is_merged_lot = 1) and l.status_id not in (25)";

        if (!is_null($region_id))
            $query .= " and l.region_id =" . $region_id;

        if (!is_null($district_id))
            $query .= " and l.district_id = " . $district_id;

        $result = DB::connection('ijaradb')->select($query);
        return $result[0];
    }

    public static function GetSuvliAreasUsed($region_id = null, $district_id = null)
    {
        $query = "select sum(lc.area) as suvli_area_used
            from lands l
            left join land_contours lc ON l.id = lc.land_id
where lc.land_extra_irragation = '1' and l.status_id not in (25)";

        if (!is_null($region_id))
            $query .= " and l.region_id =" . $region_id;

        if (!is_null($district_id))
            $query .= " and l.district_id = " . $district_id;

        $result = DB::connection('ijaradb')->select($query);
        return $result[0];

    }


    public static function GetSuvliAreas($region_id = null, $district_id = null)
    {
        $query = "select  sum(case when (lid.arable_areas_with_water > 0) then l.area end) as suvli_area
            from land_inventory_data lid
            left join lands l ON l.id = lid.land_id
            where l.parent_id is null and l.status_id not in (25)";

        if (!is_null($region_id))
            $query .= " and l.region_id =" . $region_id;

        if (!is_null($district_id))
            $query .= " and l.district_id = " . $district_id;

        $result = DB::connection('ijaradb')->select($query);
        return $result[0];

    }

    public function GetSuvli($region_id = null, $district_id = null,$status_ids = null,$order_status_ds = null)
    {
        $query = " SELECT
        count(l.id) as d_suvli_count,
        sum(l.area) as d_suvli_area
FROM lands l
LEFT JOIN land_contours lc ON l.id=lc.land_id
where
        lc.land_type = 'arable_area' AND lc.land_extra_irragation = '1'
        and (l.parent_id is not null and l.is_merged_lot = 0) and l.status_id not in (25)
        AND l.person_type = 'J'";

        if(!is_null($status_ids))
            $query .= " and l.status_id in (" . $status_ids .')';

        if(!is_null($order_status_ds))
            $query .= " and l.order_statuses_id in (" . $order_status_ds .')';

        if (!is_null($region_id))
            $query .= " and l.region_id =" . $region_id;

        if (!is_null($district_id))
            $query .= " and l.district_id = " . $district_id;

        $result = DB::connection('ijaradb')->select($query);
        return $result[0];
    }


    public function GetHokimyatImzolandi($region_id = null, $district_id = null)
    {
        $query = "select
        count(case when l.status_id >= 28 then 1 end) as hokimlikda_imzolandi_count,
        sum(case when l.status_id >= 28 then l.area end) as hokimlikda_imzolandi_area,
        count(case when l.status_id >= 28 and l.person_type = 'J'  then 1 end) as hokimlikda_imzolandi_d_count,
        sum(case when l.status_id >= 28  and l.person_type = 'J' then l.area end) as hokimlikda_imzolandi_d_area,

        count(case when l.status_id >= 28  AND l.person_type = 'J' AND lc.land_type = 'arable_area' AND lc.land_extra_irragation = '1' then 1 end) as hokimlikda_imzolandi_d_suvli_count,
        sum(case when l.status_id  >= 28  and l.person_type = 'J' AND lc.land_type = 'arable_area' AND lc.land_extra_irragation = '1' then l.area end) as hokimlikda_imzolandi_d_suvli_area

        from land_auction_lots lal left join lands l on lal.land_id = l.id  left join land_contours lc on lal.land_id = lc.land_id

        where (lal.contract_date is not null
        and  lal.contract_number is not null)
        and  (l.parent_id is not null and l.is_merged_lot = 0 or l.is_merged_lot = 1)
        and l.status_id not in (25)";


        if (!is_null($region_id))
            $query .= " and l.region_id =" . $region_id;

        if (!is_null($district_id))
            $query .= " and l.district_id = " . $district_id;

        $result = DB::connection('ijaradb')->select($query);
        return $result[0];
    }




}
