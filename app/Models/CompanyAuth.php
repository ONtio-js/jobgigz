<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAuth extends Model
{
    use HasFactory;

    protected $fillable = ['companyname','email','password'];

    public function job(){
        return $this->hasMany(Job::class);
    }

    public function company(){
        return $this->hasOne(Company::class);
    }
}
