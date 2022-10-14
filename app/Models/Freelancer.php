<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;


    public function freelance_auth(){
        return $this->belongsTo(FreelancerAuth::class);
    }

    public function socialable(){
        return $this->morphOne(socials::class,'socialable');
    }

    public function company(){
        return $this->belongsToMany(Company::class);
    }

    public function reviews(){
        return $this->belongsToMany(Review::class);
    }

    public function transactions(){
        return $this->belongsToMany(Transaction::class);
    }
}
