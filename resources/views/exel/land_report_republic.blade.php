<table border="1">
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
        <td colspan="4" style="color: red">Республика</td>
    </tr>
    <tr>
        <td></td>
        <td colspan="16">Қишлоқ хўжалиги ерларини "E-IJARA" ахборот тизимига киритилиши ва
            "E-AUKSION" га чиқарилиши тўғрисида
        </td>
    </tr>
    <tr>
        <td></td>
        <td colspan="16">МАЪЛУМОТ</td>
    </tr>
    <tr>
        <td rowspan="4">
            Т/Р
        </td>
        <td rowspan="4">
            Ҳудудлар номи
        </td>
        <td rowspan="2" colspan="4">
            "Давлат кадастрлари <br> палатасидан <br>
            киритилган бўш ер <br> участкалари"
        </td>
        <td rowspan="2" colspan="4">
            "Ўздаверлойиҳа" институти <br>
            томонидан тайёрланган лотлар"
        </td>
        <td rowspan="2" colspan="2">
            Рўйҳатдан ўтган <br> сувли ерларни <br> лотларга бўлиш <br> ҳолати
        </td>
        <td colspan="8">
            «E-AUKSION»
        </td>
        <td rowspan="4">
            Т/Р
        </td>
        <td rowspan="4">Ҳудудлар номи</td>
        <td colspan="12">Идоравий келишувда</td>
        <td colspan="4" rowspan="2">"Туман хокимлиги томонидан тасдиқланган"</td>
    </tr>
    <tr>
        <td colspan="4">
            савдо майдончасига қўйилган
        </td>
        <td colspan="4">танлов ғолиби аниқланган</td>
        <td colspan="4">Давлат кадастрлари палатаси</td>
        <td colspan="4">Сув хўжалиги бошқармаси</td>
        <td colspan="4">Қишлоқ хўжалиги бошқармаси</td>
    </tr>
    <tr>
        <td colspan="2">Жами</td>
        <td colspan="2">шундан сувли</td>
        <td colspan="2">Жами</td>
        <td colspan="2">шундан деҳқон <br> хўжалиги учун</td>
        <td rowspan="2">Лотга <br> бўлинмаган <br> майдон</td>
        <td rowspan="2">бажариш<br> фоизи<br> (%)</td>
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
        <td>майдон, га</td>
        <td>сони</td>
        <td>майдон, га</td>
        <td>лот
            сони
        </td>
        <td>майдон, га</td>
        <td>лот
            сони
        </td>
        <td>майдон, га</td>
        <td>лот
            сони
        </td>
        <td>майдон, га</td>
        <td>"лот
            сони"
        </td>
        <td>майдон, га</td>
        <td>лот
            сони
        </td>
        <td>майдон, га</td>
        <td>лот
            сони
        </td>
        <td>майдон, га</td>
        <td>лот
            сони
        </td>
        <td>майдон, га</td>
        <td>лот
            сони
        </td>
        <td>майдон, га</td>
        <td>лот
            сони
        </td>
        <td>майдон, га</td>
        <td>лот
            сони
        </td>
        <td>майдон, га</td>
        <td>лот
            сони
        </td>
        <td>майдон, га</td>
        <td>лот
            сони
        </td>
        <td>майдон, га</td>
        <td>лот
            сони
        </td>
        <td>майдон, га</td>
        <td>лот
            сони
        </td>
        <td>майдон, га</td>
    </tr>
    <tr>
        <td colspan="2">Республика жами</td>
        @php
            $counts = \App\Services\StatHelper::getOrganizationStatByRegion();
            $count_inventory = \App\Services\StatHelper::getInventoryData();
            $land_counts = \App\Services\StatHelper::getLandCountByRegion();
            $land_area = \App\Services\StatHelper::GetSuvliAreas();
            $land_area_used = \App\Services\StatHelper::GetSuvliAreasUsed();

        @endphp
        <td>{{\App\Models\Land::whereNull('parent_id')->count()}}</td>
        <td>{{round(\App\Models\Land::whereNull('parent_id')->sum('area'),2)}}</td>
        <td>{{$count_inventory->inventory_count}}</td>
        <td>{{round($count_inventory->inventory_area,2)}}</td>
        <td>{{$land_counts->count}}</td>
        <td>{{round($land_counts->area,2)}}</td>
        <td>{{$land_counts->d_count}}</td>
        <td>{{round($land_counts->d_area,2)}}</td>
        <td>{{ $land_area->suvli_area > 0 ? round($land_area->suvli_area - $land_area_used->suvli_area_used) : 0}}</td>
        <td>{{$land_area->suvli_area > 0 ?  round(($land_area_used->suvli_area_used * 100) / $land_area->suvli_area) : 0  }} %</td>
        <td>{{$land_counts->auksion_count}}</td>
        <td>{{round($land_counts->auksion_area,2)}}</td>
        <td>{{$land_counts->auksion_d_count}}</td>
        <td>{{round($land_counts->auksion_d_area,2)}}</td>
        <td>{{$land_counts->auksion_finish_count}}</td>
        <td>{{round($land_counts->auksion_finish_area,2)}}</td>
        <td>{{$land_counts->auksion_finish_d_count}}</td>
        <td>{{round($land_counts->auksion_finish_d_area,2)}}</td>
        <td colspan="2">Республика жами</td>
        <td>{{$counts->kadastr_count}}</td>
        <td>{{round($counts->kadastr_area,2)}}</td>
        <td>{{$counts->kadastr_d_count}}</td>
        <td>{{round($counts->kadastr_d_area,2)}}</td>
        <td>{{$counts->suv_count}}</td>
        <td>{{round($counts->suv_area,2)}}</td>
        <td>{{$counts->suv_d_count}}</td>
        <td>{{round($counts->suv_d_area,2)}}</td>
        <td>{{$counts->qishloq_count}}</td>
        <td>{{round($counts->qishloq_area,2)}}</td>
        <td>{{$counts->qishloq_d_count}}</td>
        <td>{{round($counts->qishloq_d_area,2)}}</td>
        <td>{{$land_counts->hokim_count}}</td>
        <td>{{round($land_counts->hokim_area,2)}}</td>
        <td>{{$land_counts->hokim_d_count}}</td>
        <td>{{round($land_counts->hokim_d_area,2)}}</td>
    </tr>
    @foreach($regions as $key => $region)
        @php
            $counts = \App\Services\StatHelper::getOrganizationStatByRegion($region->regionid);
            $count_inventory = \App\Services\StatHelper::getInventoryData($region->regionid);
            $land_counts = \App\Services\StatHelper::getLandCountByRegion($region->regionid);
            $land_area = \App\Services\StatHelper::GetSuvliAreas($region->regionid);
            $land_area_used = \App\Services\StatHelper::GetSuvliAreasUsed($region->regionid);
        @endphp
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $region->nameuz }}</td>

            <td>{{\App\Models\Land::where('region_id',$region->regionid)->whereNull('parent_id')->count()}}</td>
            <td>{{round(\App\Models\Land::where('region_id',$region->regionid)->whereNull('parent_id')->sum('area'),2)}}</td>
            <td>{{$count_inventory->inventory_count}}</td>
            <td>{{round($count_inventory->inventory_area,2)}}</td>
            <td>{{$land_counts->count}}</td>
            <td>{{round($land_counts->area,2)}}</td>
            <td>{{$land_counts->d_count}}</td>
            <td>{{round($land_counts->d_area,2)}}</td>
            <td>{{ $land_area->suvli_area > 0 ? round($land_area->suvli_area - $land_area_used->suvli_area_used) : 0}} </td>
            <td>{{$land_area->suvli_area > 0 ?  round(($land_area_used->suvli_area_used * 100) / $land_area->suvli_area) : 0  }} %</td>
            <td>{{$land_counts->auksion_count}}</td>
            <td>{{round($land_counts->auksion_area,2)}}</td>
            <td>{{$land_counts->auksion_d_count}}</td>
            <td>{{round($land_counts->auksion_d_area,2)}}</td>
            <td>{{$land_counts->auksion_finish_count}}</td>
            <td>{{round($land_counts->auksion_finish_area,2)}}</td>
            <td>{{$land_counts->auksion_finish_d_count}}</td>
            <td>{{round($land_counts->auksion_finish_d_area,2)}}</td>
            <td>{{ $key+1 }}</td>
            <td>{{ $region->nameuz }}</td>
            <td>{{$counts->kadastr_count}}</td>
            <td>{{round($counts->kadastr_area,2)}}</td>
            <td>{{$counts->kadastr_d_count}}</td>
            <td>{{round($counts->kadastr_d_area,2)}}</td>
            <td>{{$counts->suv_count}}</td>
            <td>{{round($counts->suv_area,2)}}</td>
            <td>{{$counts->suv_d_count}}</td>
            <td>{{round($counts->suv_d_area,2)}}</td>
            <td>{{$counts->qishloq_count}}</td>
            <td>{{round($counts->qishloq_area,2)}}</td>
            <td>{{$counts->qishloq_d_count}}</td>
            <td>{{round($counts->qishloq_d_area,2)}}</td>
            <td>{{$land_counts->hokim_count}}</td>
            <td>{{round($land_counts->hokim_area,2)}}</td>
            <td>{{$land_counts->hokim_d_count}}</td>
            <td>{{round($land_counts->hokim_d_area,2)}}</td>
        </tr>
    @endforeach
</table>
