<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Log;
use Validator;
use Redirect;
use Auth;
use Hash;

class ChangeAdminPasswordController extends Controller
{
    public function change_admin_password(Request $request)
    {
     $profile = User::where('id',$request->id)->first();
    $this->data['profile'] =  $profile;
    $this->data['page'] = 'admin.changeadminpassword.change-admin-password';
    return $this->admin_dashboard();

    }

    public function change_password_post(Request $request)
    {

        try {
            $data = $request->all();
            $rules = array('old_password' => 'required', 'password' => 'required|confirmed');
            $msg = [
                'old_password.required'     => 'Old Password is required',
                'password.required'         => 'Password is required' ,
                'password.confirmed'        => 'Password must match'    ,
            ];

            $validator = Validator::make($data, $rules, $msg);
            if ($validator->fails())
                return Redirect::back()->withErrors($validator->getMessageBag()->first());

            $user = Auth::guard('admin')->user();
            // print_r($user);die();

            if (!\Hash::check($data['old_password'], $user->password))
                return Redirect::back()->withErrors('Current Password is incorrect');

            DB::Table('admins')->where('id', $user->id)->update(array(
                'password' => \Hash::make($data['password']),
                'updated_at' => new \DateTime
            ));

            return Redirect::Back()->with('message', 'password updated successfully');
        } catch (\Exception $e) {
            return Redirect::back()->witherrors($e->getMessage())->withInput();
        }

    }
}
