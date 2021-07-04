<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;
    protected $fillable = [
        'host_id',
        'is_agency',
        'vibe',
        'punctuality',
        'competency',
        'final_rate',
        'comment',
        'user_id'
    ];
}
