<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = "comments";

    public function Course(){
        return $this->belongsTo(Courses::class, 'course', 'id');
    }

    public function User(){
        return $this->hasOne(User::class, 'id', 'user');
    }
}
