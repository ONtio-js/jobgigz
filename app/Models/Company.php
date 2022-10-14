<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;


    public function company_auth(){
        return $this->belongsTo(CompanyAuth::class);
    }

    public function socialable(){
        return $this->morphOne(socials::class,'socialable');
    }

    public function freelancer(){
        return $this->belongsToMany(Freelancer::class);
    }
}
