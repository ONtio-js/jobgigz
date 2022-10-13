<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAuth extends Model
{
    use HasFactory;

    protected $fillable = ['id','companyname','industry','email','launchdate','description','tagline','location','password','website','image_path'];

    public function job(){
        return $this->hasMany(Job::class);
    }
}
