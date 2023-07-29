<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Courses;
use App\Models\Comments;
use App\Models\Favorites;
use App\Models\Subs;
use App\Models\Ads;

use Auth;

class CourseController extends Controller
{
    
    public function all(){

        // KURSLAR
        $courses = Courses::where('status',1)->get();

        return view('layout.course.all', ["courses" => $courses]);
    }

    public function detail($id){
        $course = Courses::find($id);
        $ads = Ads::where('page', 'COURSE_DETAIL')->where('status',1)->get();
        return view('layout.course.detail', ['course' => $course, 'ads' => $ads]);
    }

    public function add_comment(Request $request){
        $response = ["type" => "warning", "message" => null, "status" => false];
        if(empty($request->message)){
            $response["message"] = "Yorum mesajı boş olmamalı!";
        }else{
            $comment = new Comments;
            $comment->course = $request->course;
            $comment->user = Auth::user()->id;
            $comment->message = trim(strtolower($request->message));
            $comment->point = $request->point;
            $comment->status = 1;
            if($comment->save()){
                $response["type"] = "success";
                $response["message"] = "Yorum gönderildi.";
                $response["status"] = true;
            }else{
                $response["type"] = "error";
                $response["message"] = "SYSTEM_ERROR";
            }
        }

        return $response;
    }

    public function add_favorite(Request $request){
        $response = ["type" =>  "warning", "message" => null, "status" => false];
        if($request->course){
            $favorites = Favorites::where('course',$request->course)->where('user', Auth::user()->id)->first();
            if(!$favorites){
                $favori = new Favorites;
                $favori->user = Auth::user()->id;
                $favori->course = $request->course;
                if($favori->save()){
                    $response["status"] = true;
                }
            }
        }
        return $response;
    }

    public function remove_favorite(Request $request){
        $response = ["status" => false];

        if($request->course){
            $favorites = Favorites::where('course',$request->course)->where('user', Auth::user()->id)->first();
            if($favorites){
                if($favorites->delete()){
                    $response["status"] = true;
                }
            }
        }
        return $response;
    }

    public function add_sub(Request $request){
        $response = ["status" => false];
        if($request->course){
            $subs = Subs::where('course',$request->course)->where('user', Auth::user()->id)->first();
            if(!$subs){
                $sub = new Subs;
                $sub->user = Auth::user()->id;
                $sub->course = $request->course;
                if($sub->save()){
                    $response["status"] = true;
                }
            }
        }
        return $response;
    }
}
