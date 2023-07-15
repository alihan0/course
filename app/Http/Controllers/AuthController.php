<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view("layout.auth.login");
    }

    public function register(){
        return view('layout.auth.register');
    }

    public function register_control(Request $request){
        $response = ["type" => "warning", "message" => null, "status" => false];

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        if(empty($name) || empty($email) || empty($password) ){
            $response["message"] = "Lütfen boş alan bırakmayın!";
        }else{
            $user = User::where('email', $email)->first();
            if($user){
                $response["message"] = "E-posta kullanılıyor";
            }else{
                $user = new User;
                $user->name = $name;
                $user->email = $email;
                $user->password = Hash::make($password);

                if($user->save()){
                    $response["type"] =  "success";
                    $response["message"] = "Hesap oluşturuldu";
                    $response["status"] = true;
                }else{
                    $response["type"] = "danger";
                    $response["message"] = "Sistem Hatası!";
                }
            }
        }

        return $response;
    }
}
