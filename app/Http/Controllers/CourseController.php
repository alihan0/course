<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Courses;

class CourseController extends Controller
{
    public function all(){

        // KURSLAR
        $courses = Courses::where('status',1)->get();

        return view('layout.course.all', ["courses" => $courses]);
    }

    public function detail($id){
        echo $id;
    }
}
