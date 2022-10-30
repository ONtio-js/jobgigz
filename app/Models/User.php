<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime'
    ];

    /**
     * @var timestamps < false
     */

    public $timestamps = false;

    public function company(){
        return $this->hasOne(Company::class);
    }

    public function freelancer(){
        return $this->hasOne(Freelancer::class);
    }

    public function verify_user(){
        return $this->hasOne(VerifyUser::class);
    }

    public function Passwordreset(){
        return $this->hasOne(PasswordReset::class,'users_id');
    }
}
