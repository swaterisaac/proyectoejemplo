<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupStudent extends Model
{
    use HasFactory;
    public function group(){
        return $this->belongsTo(Group::class);
    }
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
