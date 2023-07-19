<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function all(){
        return view('layout.course.all');
    }
}
