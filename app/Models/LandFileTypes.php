<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandFileTypes extends Model
{
    use HasFactory;

    protected $connection = 'ijaradb';
    protected $table = 'land_file_types';
}
