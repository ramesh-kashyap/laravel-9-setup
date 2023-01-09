<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Redirect;

class Login extends Controller
{
    

    public function login(Request $request)
    {
      
            $validation =  Validator::make($request->all(), [
                'username' => 'required|unique:users',
                'password' => 'required|string',

            ]);
        
            // dd($request);
            $post_array  = $request->all();
            $credentials = $request->only('username', 'password');
                 
            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                if($user->active_status=="Block")
                {
                Auth::logout();
               return Redirect::back()->withErrors(array('You are Blocked by admin'));
                }



                return redirect()->route('user.dashboard');
            }
            else
            {
                // echo "credentials are invalid"; die;
                return Redirect::back()->withErrors(array('Invalid Username & Password !'));
            }
        
        }


}
