<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Comments;

class Courses extends Model
{
    use HasFactory;

    protected $table = "courses";


    public function Comments(){
        return $this->hasMany(Comments::class, 'course','id');
    }
}
