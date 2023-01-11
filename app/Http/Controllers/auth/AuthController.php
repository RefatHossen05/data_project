<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function regForm(){
        return view('auth.regform');
    }
    public function regsubmit(Request $request){

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
        ]);
        return back()->with('success','Registation Successful');
    }

    public function loginForm(){
        return view('auth.login');
    }

    public function loginsubmit(Request $request){
        $credentials = $request->except('_token');
        $authentication=auth()->attempt($credentials);

        

        if($authentication){
            return to_route('dashboard')->with('success','Log in Successful');
        }
        else{
            return to_route('login')->with('danger','Data Not match Plase Try Again');
        }
    }

    public function logout(){
        auth()->logout();
         return to_route('home.page')->with('success','Logout Successfully');
    }
   
}
 