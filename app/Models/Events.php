<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = [
        'host',
        'host_id',
        'name',
        'description',
        'contact_phone',
        'contact_email',
        'location',
        'dates',
        'capacity',
        'images',
        'promotional_video',
        'is_verified',
        'display_host_message',
        'interested_users',
        'price',
        'is_free'
    ];
}
