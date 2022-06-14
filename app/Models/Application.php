<?php

namespace App\Models;

use App\Models\Front\District;
use App\Models\Front\Region;
use App\Models\Front\LocalStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $guarded = [];




    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function land_purpose()
    {
        return $this->belongsTo(LandPurposes::class);
    }

    public function status()
    {
        return $this->belongsTo(LocalStatus::class, 'status_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUpdatedAtAttribute($value){
        $date = Carbon::parse($value);
        return $date->format("Y-m-d, H:i");
    }


}
