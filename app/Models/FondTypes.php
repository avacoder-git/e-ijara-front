<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FondTypes extends Model
{
    use HasFactory;

    protected $connection = 'ijaradb';
    protected $table = 'fond_types';


}
