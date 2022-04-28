<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistrictController extends Controller
{
    //


    public function show($region)
    {
        return DB::select('select id, nameuz, regioncode from districts where regioncode = '. $region);
    }


}
