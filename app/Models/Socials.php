<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socials extends Model
{
    use HasFactory;

    protected $guarded = [];


    public $timestamps = false;

    public function social(){
        return $this->morphTo('socialable');
    }
}
