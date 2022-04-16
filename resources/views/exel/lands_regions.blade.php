<table>
    <tr>
        <td colspan="8"><h1>{!! $title !!}
            </h1>
        </td>
    </tr>
    <tr></tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><i>{{\Carbon\Carbon::now()->format('d.m.Y H:i:s')}}</i></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><i>{{\Carbon\Carbon::now()->format('d.m.Y H:i:s')}}</i></td>

    </tr>
    <tr>
        <td rowspan="4">Ҳудудлар номи</td>
        <td colspan="4" rowspan="2">"Давлат кадастрлари палатасидан <br> киритилган бўш ер участкалари"</td>
        <td colspan="4" rowspan="2">"Ўздаверлойиҳа" институти <br>
            томонидан тайёрланган лотлар
        </td>
        <td colspan="8">Идоравий келишув</td>
        <td rowspan="4">Ҳудудлар номи</td>
        <td colspan="4"></td>
        <td rowspan="2" colspan="4">"Туман хокимлиги
            томонидан тасдиқланган"
        </td>
        <td colspan="12">«E-AUKSION»</td>
    </tr>
    <tr>
        <td colspan="4">Давлат кадастрлари палатаси</td>
        <td colspan="4">Сув хўжалиги бошқармаси</td>
        <td colspan="4">Қишлоқ хўжалаги бошқармаси</td>
        <td colspan="4">савдо майдончасига қўйилган</td>
        <td colspan="4">танлов ғолиби аниқланган</td>
        <td colspan="4">савдо майдончасидан қайтарилган</td>
    </tr>
    <tr>
        <td colspan="2">Жами</td>
        <td colspan="2">шундан сувли</td>
        <td colspan="2">Жами</td>
        <td colspan="2">шундан деҳқон <br> хўжалиги учун(сувли)</td>
        <td colspan="2">Жами</td>
        <td colspan="2">шундан деҳқон <br> хўжалиги учун</td>
        <td colspan="2">Жами</td>
        <td colspan="2">шундан деҳқон <br> хўжалиги учун</td>
        <td colspan="2">Жами</td>
        <td colspan="2">шундан деҳқон <br> хўжалиги учун</td>
        <td colspan="2">Жами</td>
        <td colspan="2">шундан деҳқон <br> хўжалиги учун</td>
        <td colspan="2">Жами</td>
        <td colspan="2">шундан деҳқон <br> хўжалиги учун</td>
        <td colspan="2">Жами</td>
        <td colspan="2">шундан деҳқон <br> хўжалиги учун</td>
        <td colspan="2">Жами</td>
        <td colspan="2">шундан деҳқон <br> хўжалиги учун</td>
    </tr>
    <tr>
        <td>сони</td>
        <td>майдони, га</td>
        <td>сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
        <td>лот сони</td>
        <td>майдони, га</td>
    </tr>
    <tr>
        <td></td>
        <td colspan="4">1</td>
        <td colspan="4">2</td>
        <td colspan="4">3</td>
        <td colspan="4">4</td>
        <td></td>
        <td colspan="4">5</td>
        <td colspan="4">6</td>
        <td colspan="12">7</td>
    </tr>
    <tr>
        <td>Жами</td>
        @php
            $counts = \App\Services\StatHelper::getOrganizationStatByRegion();
            $count_inventory = \App\Services\StatHelper::getInventoryData();
            $land_counts = \App\Services\StatHelper::getLandCountByRegion();
                            $land_suvli = \App\Services\StatHelper::GetSuvli();

        @endphp
        <td>{{\App\Models\Land::whereNull('parent_id')->where('is_merged_lot',0)->count()}}</td>
        <td>{{round(\App\Models\Land::whereNull('parent_id')->where('is_merged_lot',0)->sum('area'),2)}}</td>
        <td>{{$count_inventory->inventory_count}}</td>
        <td>{{round($count_inventory->inventory_area,2)}}</td>
        <td>{{$land_counts->count}}</td>
        <td>{{round($land_counts->area,2)}}</td>
        <td>{{$land_suvli->d_suvli_count}}</td>
        <td>{{round($land_suvli->d_suvli_area,2)}}</td>
        <td>{{$counts->kadastr_count}}</td>
        <td>{{round($counts->kadastr_area,2)}}</td>
        <td>{{$counts->kadastr_d_count}}</td>
        <td>{{round($counts->kadastr_d_area,2)}}</td>
        <td>{{$counts->suv_count}}</td>
        <td>{{round($counts->suv_area,2)}}</td>
        <td>{{$counts->suv_d_count}}</td>
        <td>{{round($counts->suv_d_area,2)}}</td>
        <td>Жами</td>
        <td>{{$counts->qishloq_count}}</td>
        <td>{{round($counts->qishloq_area,2)}}</td>
        <td>{{$counts->qishloq_d_count}}</td>
        <td>{{round($counts->qishloq_d_area,2)}}</td>
        <td>{{$land_counts->hokim_count}}</td>
        <td>{{round($land_counts->hokim_area,2)}}</td>
        <td>{{$land_counts->hokim_d_count}}</td>
        <td>{{round($land_counts->hokim_d_area,2)}}</td>
        <td>{{$land_counts->auksion_count}}</td>
        <td>{{round($land_counts->auksion_area,2)}}</td>
        <td>{{$land_counts->auksion_d_count}}</td>
        <td>{{round($land_counts->auksion_d_area,2)}}</td>
        <td>{{$land_counts->auksion_finish_count}}</td>
        <td>{{round($land_counts->auksion_finish_area,2)}}</td>
        <td>{{$land_counts->auksion_finish_d_count}}</td>
        <td>{{round($land_counts->auksion_finish_d_area,2)}}</td>
        <td>{{$land_counts->auksion_return_count}}</td>
        <td>{{round($land_counts->auksion_return_area,2)}}</td>
        <td>{{$land_counts->auksion_return_d_count}}</td>
        <td>{{round($land_counts->auksion_return_d_area,2)}}</td>

    </tr>
    @foreach($lands as $item)
        @php

            $counts = \App\Services\StatHelper::getOrganizationStatByRegion($item->regionid);
            $count_inventory = \App\Services\StatHelper::getInventoryData($item->regionid);
            $land_counts = \App\Services\StatHelper::getLandCountByRegion($item->regionid);
            $land_suvli = \App\Services\StatHelper::GetSuvli($item->regionid);
        @endphp
        <tr>
            <td>{{$item->nameuz}}</td>
            <td>{{\App\Models\Land::whereNull('parent_id')->where('is_merged_lot',0)->where('region_id',$item->regionid)->count()}}</td>
            <td>{{round(\App\Models\Land::whereNull('parent_id')->where('is_merged_lot',0)->where('region_id',$item->regionid)->sum('area'),2)}}</td>
            <td>{{$count_inventory->inventory_count}}</td>
            <td>{{round($count_inventory->inventory_area,2)}}</td>
            <td>{{$land_counts->count}}</td>
            <td>{{round($land_counts->area,2)}}</td>
            <td>{{$land_suvli->d_suvli_count}}</td>
            <td>{{round($land_suvli->d_suvli_area,2)}}</td>
            <td>{{ $counts->kadastr_count }}</td>
            <td>{{round($counts->kadastr_area,2)}}</td>
            <td>{{$counts->kadastr_d_count}}</td>
            <td>{{round($counts->kadastr_d_area,2)}}</td>
            <td>{{$counts->suv_count}}</td>
            <td>{{round($counts->suv_area,2)}}</td>
            <td>{{$counts->suv_d_count}}</td>
            <td>{{round($counts->suv_d_area,2)}}</td>
            <td>{{$item->nameuz}}</td>
            <td>{{$counts->qishloq_count}}</td>
            <td>{{round($counts->qishloq_area,2)}}</td>
            <td>{{$counts->qishloq_d_count}}</td>
            <td>{{round($counts->qishloq_d_area,2)}}</td>

            <td>{{$land_counts->hokim_count}}</td>
            <td>{{round($land_counts->hokim_area,2)}}</td>
            <td>{{$land_counts->hokim_d_count}}</td>
            <td>{{round($land_counts->hokim_d_area,2)}}</td>
            <td>{{$land_counts->auksion_count}}</td>
            <td>{{round($land_counts->auksion_area,2)}}</td>
            <td>{{$land_counts->auksion_d_count}}</td>
            <td>{{round($land_counts->auksion_d_area,2)}}</td>
            <td>{{$land_counts->auksion_finish_count}}</td>
            <td>{{round($land_counts->auksion_finish_area,2)}}</td>
            <td>{{$land_counts->auksion_finish_d_count}}</td>
            <td>{{round($land_counts->auksion_finish_d_area,2)}}</td>
            <td>{{$land_counts->auksion_return_count}}</td>
            <td>{{round($land_counts->auksion_return_area,2)}}</td>
            <td>{{$land_counts->auksion_return_d_count}}</td>
            <td>{{round($land_counts->auksion_return_d_area,2)}}</td>

        </tr>
    @endforeach
</table>
