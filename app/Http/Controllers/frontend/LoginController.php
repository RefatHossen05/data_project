<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
   public function registration(Request $request){

    // $request->validate([
    //     'name'=>'required',
    //     'email'=>'required|email|unique:users,email',
    //     'username'=>'required',
    //     'password'=>'required|min:5',
    // ]);


    $validator=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'username'=>'required',
            'password'=>'required|min:5',
    ]);

    if($validator->fails()){
        notify()->error($validator->getMessageBag());
        return back();
    }


            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'username'=>$request->username,                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                'password'=>bcrypt($request->password),

            ]);
            notify()->success('Registration Successfull');
            return back();
   }


   public function submit_login(Request $request){
        $credintial =$request->except('_token');

        if(auth()->attempt($credintial) && auth()->user()->role=="admin"){          
            return to_route('dashboard');
            
        }notify()->success('Login Successfull');
        //  elseif(auth()->attempt($credintial)){
        //     ;
        //     return back();

        return back();
        
        
   }




   public function frontend_logout(){
       auth()->logout();
       notify()->success('Logout Successfull');
       return back();
   }
}
