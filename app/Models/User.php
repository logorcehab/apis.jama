<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'is_verified',
        'is_active',
        'social_facebook',
        'social_instagram',
        'social_whatsapp',
        'social_twitter',
        'social_snapchat',
        'events_hosted',
        'events_attended',
        'blocked_by',
        'blocked',
        'bio',
        'date_of_birth',
        'current_city',
        'gender',
        'interest',
        'profile_image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function linkedSocialAccounts()
    {
        return $this->hasMany(LinkedSocialAccount::class);
    }
}
