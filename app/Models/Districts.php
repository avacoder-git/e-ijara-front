<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    use HasFactory;

    protected $connection = 'ijaradb';
    protected $table = 'uz_districts';

    public function Region()
    {
        return $this->belongsTo(Regions::class, 'regionid', 'regionid');
    }

    public function lands()
    {
        return $this->hasMany(Land::class,'district_id','areaid');
    }

    public function planned_reduced()
    {
        return $this->hasOne(PlanedReduced::class,'district_id','areaid')->where('year',Carbon::now()->year);
    }

}
