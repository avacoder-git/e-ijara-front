<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalinityLevel extends Model
{
    use HasFactory;

    protected $connection = 'ijaradb';
    protected $table = 'salinity_levels';
}
