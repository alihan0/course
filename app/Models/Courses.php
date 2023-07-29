<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Comments;
use App\Models\Favorites;
use App\Models\Subs;

use Auth;

class Courses extends Model
{
    use HasFactory;

    protected $table = "courses";


    public function Comments(){
        return $this->hasMany(Comments::class, 'course','id');
    }
    public function Favorites(){
        return $this->hasMany(Favorites::class, 'course', 'id');
    }
    public function myFavorites(){
        return $this->hasMany(Favorites::class, 'course', 'id')->where('user', Auth::user()->id);
    }

    public function Subs(){
        return $this->hasMany(Subs::class, 'course', 'id');
    }


    public function mySubs(){
        return $this->hasMany(Subs::class, 'course', 'id')->where('user', Auth::user()->id);
    }
}
