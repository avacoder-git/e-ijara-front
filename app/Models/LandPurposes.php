<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandPurposes extends Model
{
    use HasFactory;

    protected $connection = 'ijaradb';
    protected $table = 'land_purposes';

}
