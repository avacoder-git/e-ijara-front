<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandGeometry extends Model
{
    use HasFactory;

    protected $connection = 'ijaradb';

    protected $table = 'land_geometries';

    protected $casts = [
        'geom' => 'array',
    ];
    protected $fillable = [
        'land_id', 'geometry', 'geometry_original'
    ];
}
