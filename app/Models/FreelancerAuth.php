<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreelancerAuth extends Model
{
    use HasFactory;

    protected $fillable = ['firstname','skills','lastname','email','password','birthdate','description','tagline','avaliablity','payrate','location','language','portfolio','blogsite','companysite','id','image_path'];
    protected $cast = ['skills' => 'array'];

}
