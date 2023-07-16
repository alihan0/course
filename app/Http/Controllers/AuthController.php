<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Auth;

class AuthController extends Controller
{
    // LOGIN PAGE 
    public function login(){
        return view("layout.auth.login");
    }

    // REGISTER PAGE
    public function register(){
        return view('layout.auth.register');
    }

    // REGISTER CONTROL METHOD
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

    public function login_control(Request $request){
        $response = ["type" => "warning", "message" => null, "status" => false];

        if(empty($request->email) || empty($request->password)){
            $response["message"] = "Boş alan bırakmayın!";
        }else{
            
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                //Auth::loginUsingId(1);

                $user = User::where('email',$request->email)->first();

                if($user->status == 1){
                    Auth::loginUsingId($user->id);
                    $response["type"] = "success";
                    $response["message"] = "Başarıyla oturum açıldı.";
                    $response["status"] = true;
                }else{
                    $response["type"] = "error";
                    $response["message"] = "Oturum açma izniniz bulunmuyor!";
                }
            }else{
                $response["message"] = "E-posta ya da şifre hatalı!";
            }
        }

        return $response;
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
