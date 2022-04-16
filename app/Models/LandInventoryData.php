<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandInventoryData extends Model
{
    use HasFactory;

    protected $connection = 'ijaradb';
    protected $table = 'land_inventory_data';
}
