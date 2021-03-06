<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function enrollment()
    {
        return $this->hasOne(Enrollment::class);
    }
    public function groupStudent(){
        return $this->hasMany(GroupStudent::class);
    }
}
