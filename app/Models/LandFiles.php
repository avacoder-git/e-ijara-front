<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandFiles extends Model
{
    use HasFactory;

    protected $connection = 'ijaradb';
    protected $table = 'land_files';

    public function land_file_type()
    {
        return $this->hasOne(LandFileTypes::class, 'id', 'type_id');
    }
}
