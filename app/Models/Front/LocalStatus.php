<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalStatus extends Model
{
    use HasFactory;
    protected $table = 'local_statuses';

    protected $fillable = [
        'name'
    ];
}
