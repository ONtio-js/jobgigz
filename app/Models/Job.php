<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $cast = [
        'skills' => 'array'
    ];

    protected $fillable = [
        'title','company_auth_id','description','type','category','avaliability','experiencelevel','salarymin','salarymax','location','languages','skills','file_path'
    ];

    public function company_auth(){
        return $this->belongsTo(CompanyAuth::class);
    }

    public function industry(){
        return $this->belongsToMany(Industry::class);
    }

    public function review(){
        return $this->hasOne(Review::class);
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
