<style>
    .strikethroughCell {
        text-decoration: line-through !important;
    }

    .table-text-center th,
    .table-text-center td {
        text-align: center !important;
    }
</style>
<table>
    <thead>
    <tr>
        <td style="font-weight: bold; text-align: center" colspan="10">{{ \Carbon\Carbon::now()->format('d.m.Y') }} йил
            ҳолатига
        </td>
    </tr>
    <tr>
        <th style="font-weight: bold">Ҳудудлар</th>
        <th style="font-weight: bold; text-align: center">2022 йилда <br> қисқартирилиши <br> режалашти-рилган <br> ер,
            га
        </th>
        <th style="font-weight: bold; text-align: center" colspan="2">Давлат кадастрлари <br> палатасидан келиб тушган
            <br> маълумотлар
        </th>
        <th style="font-weight: bold; text-align: center" colspan="2">Ўздаверлойиҳа</th>
        <th style="font-weight: bold; text-align: center">Идоравий келишув</th>
        <th style="font-weight: bold; text-align: center">Туман хокимияти</th>
        <th style="font-weight: bold; text-align: center">«E-IJRO AUKSION» савдо майдончаси</th>
        <th style="font-weight: bold; text-align: center">Қисқартириш %</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td></td>
        <td></td>
        <td style="font-weight: bold">Сони</td>
        <td style="font-weight: bold">Майдони (Га)</td>
        <td>Лойиҳалашда</td>
        <td>Майдони (Га)</td>
        <td style="font-weight: bold">Сони</td>
        <td style="font-weight: bold">Сони</td>
        <td style="font-weight: bold">Жами</td>
    </tr>
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
    </tr>
    <tr>
        <td>Республика бўйича</td>
        <td></td>
        <td>{{\App\Models\Land::whereNull('parent_id')->count()}}</td>
        <td>{{\App\Models\Land::whereNull('parent_id')->sum('area')}}</td>
        <td>{{\App\Models\Land::where('status_id',2)->count()}}</td>
        <td>{{\App\Models\Land::where('status_id',2)->sum('area')}}</td>
        <td>{{\App\Models\Land::where('status_id',3)->count()}}</td>
        <td>{{\App\Models\Land::where('status_id',5)->count()}}</td>
        <td>{{\App\Models\Land::where('status_id',8)->count()}}</td>
        <td></td>
    </tr>
    @foreach($lands as $key=>$item)
        <tr>
            <td>----{{$item->nameuz}}</td>
            <td>{{isset($item->planned) ? $item->planned->planned : 0}}</td>
            <td>{{$item->lands->whereNull('parent_id')->count()}}</td>
            <td>{{$item->lands->whereNull('parent_id')->sum('area')}}</td>
            <td>{{$item->lands->where('status_id',2)->count()}}</td>
            <td>{{$item->lands->where('status_id',2)->sum('area')}}</td>
            <td>{{$item->lands->where('status_id',3)->count()}}</td>
            <td>{{$item->lands->where('status_id',5)->count()}}</td>
            <td>{{$item->lands->where('status_id',8)->count()}}</td>
            <td>{{isset($item->planned) ? $item->lands->where('status_id',8)->count() * 100 / $item->planned->planned : 0}}</td>
        </tr>
        @foreach($item->Districts as $key=>$district)
            <tr>
                <td>--------{{$district->nameuz}}</td>
                <td></td>
                <td>{{$district->lands->whereNull('parent_id')->count()}}</td>
                <td>{{$district->lands->whereNull('parent_id')->sum('area')}}</td>
                <td>{{$district->lands->where('status_id',2)->count()}}</td>
                <td>{{$district->lands->where('status_id',2)->sum('area')}}</td>
                <td>{{$district->lands->where('status_id',3)->count()}}</td>
                <td>{{$district->lands->where('status_id',5)->count()}}</td>
                <td>{{$district->lands->where('status_id',8)->count()}}</td>
                <td></td>
            </tr>
        @endforeach
    @endforeach
    </tbody>
</table>
