<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedLand extends Model
{
    use HasFactory;
    protected  $fillable = [
        'land_id',
        'user_id',
    ];

    public function land() {
         return $this->belongsTo(Land::class, 'land_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
