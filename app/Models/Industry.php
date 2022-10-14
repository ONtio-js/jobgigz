<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;



    public function job(){
        return $this->belongsToMany(Job::class);
    }

    public function skill(){
        return $this->belongsToMany(Skill::class);
    }
}
