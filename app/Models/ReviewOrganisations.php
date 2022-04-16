<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewOrganisations extends Model
{
    use HasFactory;

    protected $connection = 'ijaradb';
    protected $table = 'review_orgnizations';
}
