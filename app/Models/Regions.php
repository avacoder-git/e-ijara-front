<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Regions extends Model
{
    use HasFactory;

    protected $connection = 'ijaradb';
    protected $table = 'uz_regions';


    public function Districts()
    {
        return $this->hasMany(Districts::class,'regionid','regionid')->whereNotIn('areacode',[200,400,260])->withCount('lands');
    }

    public function lands()
    {
        return $this->hasMany(Land::class,'region_id','regionid')->with('review_organizations','inventory');
    }

    public function lands_count()
    {
        return $this->hasMany(Land::class,'region_id','regionid')->whereNull('parent_id');
    }


    public function new_lands()
    {
        return $this->hasMany(Land::class,'region_id','regionid')
            ->whereNotNull('parent_id')->whereIn('status_id', [31, 33]);
    }
    public function lands_auction()
    {
        return $this->hasMany(Land::class,'region_id','regionid')
            ->whereNotNull('parent_id')->whereIn('status_id', [14,16,17]);
    }

    public function planned_reduced()
    {
        return $this->hasOne(PlanedReduced::class,'region_id','regionid')->where('year',Carbon::now()->year);
    }
}
