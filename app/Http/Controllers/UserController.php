<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('user.login');
    }

    public function register(){
        return view('user.register');
    }

    public function dologin(Request $req){

        $req->validate([

            "email" => "required",
            "password" => "required|max:15|min:6"
        ]);

        if(is_numeric($req->get('email'))){
            
            
            $user = Auth::attempt(["mobile" => $req->email, "password" => $req->password]);
        }
        elseif (filter_var($req->get('email'), FILTER_VALIDATE_EMAIL)) {
            
            $user = Auth::attempt(["email" => $req->email, "password" => $req->password]);
        }
        
        else{
            ['username' => $req->get('email'), 'password'=>$req->get('password')];
         
            $user = Auth::attempt(["username" => $req->email, "password" => $req->password]);
        } 
        
        if($user != false){
            return redirect()->intended();
        }
        session()->flash("unsuccess", "Invalid Username and Password");
        return redirect()->back();
        
    }
    public function showCart(){
        return view('main.cart');
    }

    public function doregister(Request $req){
        $req->validate([
            "full_name" => "required|max:50",
            "username" => "required|max:15|unique:users,username",
            "email" =>"required|email|max:50|unique:users,email",
            "mobile" => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            "password" => "required|max:15|min:6|confirmed"
        ]);
        $data = $req->all();
        $data["password"] = bcrypt($req->password);
        User::create($data);
        session()->flash("success", "Thank you for Registration!");
        return redirect()->back();
        
    }
    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}
