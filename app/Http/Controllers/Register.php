<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Register extends Controller
{
  

    public function getUserNameAjax(Request $request)
    {

      $user =User::where('username',$request->user_id)->first();
            if($user)
            {
                return $user->name;
            } 
            else{
                return 1;
            }       
    }

}
