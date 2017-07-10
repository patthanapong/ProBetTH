<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getlogin()
    {
        return view('auth.login');
    }

     public function postlogin()
    {
         $inputs = request()->except([ '_token' ]);
        if(auth()->attempt($inputs)) {
            
            // Activity_Log::create([
            //     'user_id' => auth()->user()->id,
            //     'message' => 'Login'
            //     'message' => 'Login'
            // session()->flash('Titlemessage', 'Success');
            // session()->flash('message', 'Login Success');
            return redirect()->intended('/');
        }else{
            // session()->flash('message', 'Login Fail');
            return view('auth.login');
        }      
        //return "postlogin";
    }      

    public function logout(){


            // Activity_Log::create([
            //     'user_id' => auth()->user()->id,
            //     'message' => 'Logout'    
            // ]);


        auth()->logout();
        return redirect('/');
    }

    public function register()
    {
        return view('auth.register');
    }

    
}

