<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanedReduced extends Model
{
    protected $connection = 'ijaradb';

    protected $fillable = [
        'region_id',
        'district_id',
        'planned',
        'year',
    ];
    use HasFactory;
}
