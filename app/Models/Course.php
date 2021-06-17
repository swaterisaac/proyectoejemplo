<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
    public function group(){
        return $this->hasMany(Group::class);
    }
}
