<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Income;
use App\Models\Investment;
use App\Models\Extra_user;
use App\Models\Rank_bonus;
use App\Models\Bank;
use App\Models\Withdraw;
use App\Models\GeneratePin;
use App\Models\Ticket;
use App\Models\WalletPin;
use App\Models\BuyFund;
use App\Models\UsedPin;
use App\Models\Level_acheive;
use App\Models\Feedback;
use App\Models\Spiner;
use Auth;
use DB;
use Log;
use Validator;
use Redirect;
use Helper;
use Storage;
use Carbon\Carbon;

class UserController extends Controller
{

    public function alluserlist(Request $request)
    {
        $limit = $request->limit ? $request->limit : 10;
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = User::orderBy('id', 'DESC');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('name', 'LIKE', '%' . $search . '%')
              ->orWhere('username', 'LIKE', '%' . $search . '%')
              ->orWhere('email', 'LIKE', '%' . $search . '%')
              ->orWhere('phone', 'LIKE', '%' . $search . '%')
              ->orWhere('jdate', 'LIKE', '%' . $search . '%')
              ->orWhere('active_status', 'LIKE', '%' . $search . '%');
            });

          }
                $notes = $notes->paginate($limit)
                    ->appends([
                        'limit' => $limit
                    ]);

                    $this->data['alluserlist'] =  $notes;
                    $this->data['search'] = $search;
                    $this->data['page'] = 'admin.users.alluserlist';
                    return $this->admin_dashboard();


    }


    public function active_users(Request $request)
    {
        $limit = $request->limit ? $request->limit : 10;
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = User::where('active_status','Active')->orderBy('id', 'DESC');

       if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
          $q->Where('name', 'LIKE', '%' . $search . '%')
          ->orWhere('username', 'LIKE', '%' . $search . '%')
          ->orWhere('email', 'LIKE', '%' . $search . '%')
          ->orWhere('phone', 'LIKE', '%' . $search . '%')
          ->orWhere('jdate', 'LIKE', '%' . $search . '%')
          ->orWhere('active_status', 'LIKE', '%' . $search . '%');
        });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

     $this->data['active_user'] =  $notes;
     $this->data['search'] = $search;
     $this->data['page'] = 'admin.users.active-user';
     return $this->admin_dashboard();

    }

    public function edit_users(Request $request)
    {
        $limit = $request->limit ? $request->limit : 10;
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = User::orderBy('id', 'DESC');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('name', 'LIKE', '%' . $search . '%')
              ->orWhere('username', 'LIKE', '%' . $search . '%')
              ->orWhere('email', 'LIKE', '%' . $search . '%')
              ->orWhere('phone', 'LIKE', '%' . $search . '%')
              ->orWhere('jdate', 'LIKE', '%' . $search . '%')
              ->orWhere('active_status', 'LIKE', '%' . $search . '%');
            });

          }
                $notes = $notes->paginate($limit)
                    ->appends([
                        'limit' => $limit
                    ]);

                    $this->data['edit_users'] =  $notes;
                    $this->data['search'] = $search;
                    $this->data['page'] = 'admin.users.edit-users';
                    return $this->admin_dashboard();


    }

    public function edit_users_link(Request $request)
    {

       $id= $request->id ; // or any params

    $profile = User::where('id',$id)->first();
     $bank = Bank::where('user_id',$id)->first();
    // print_r($data);die(); ÷
    return view('admin.users.users_profile_view')->with(compact('profile','bank'));

   }

   public function users_profile_update(Request $request)

   {
       try{
           $validation =  Validator::make($request->all(), [
               'email' => 'required',
               'name' => 'required',

               'phone' => 'required|numeric'

           ]);

           if($validation->fails()) {
               Log::info($validation->getMessageBag()->first());

               return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
           }


           //check if email exist
         $post_array  = $request->all();
           $id=$post_array['id'];
         $update_data['name']=$post_array['name'];
         $update_data['phone']=$post_array['phone'];
         if(!empty($post_array['password']))
         {
           $update_data['password']= \Hash::make($post_array['password']);
         }
       //   $update_data['trx_addres']=$post_array['trx_addres'];
         $update_data['email']=$post_array['email'];
          $bank_array['account_holder']=$post_array['account_holder'];
          $bank_array['bank_name']=$post_array['bank_name'];
          $bank_array['branch_name']=$post_array['branch_name'];
          $bank_array['account_no']=$post_array['account_no'];
          $bank_array['user_id']=$id;
          $bank_array['ifsc_code']=$post_array['ifsc_code'];

         $user =  user::where('id',$id)->update($update_data);
         if(!empty($bank_array['account_holder']) && !empty($bank_array['account_no']))
         {
              Bank::updateOrCreate(['user_id'=>$id],$bank_array);
         }

       return redirect()->back()->with('message', 'Updated successfully');

         }
          catch(\Exception $e){
           Log::info('error here');
           Log::info($e->getMessage());
           print_r($e->getMessage());
           die("hi");
           return back()->withErrors('error', $e->getMessage())->withInput();
           //return response(array('success'=>0,'statuscode'=>500,'msg'=>$e->getMessage()),500);
       }
   }



   public function block_users(Request $request)
    {
        $limit = $request->limit ? $request->limit : 10;
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = User::wherein('active_status',array('Active','Block','Inactive'))->orderBy('id', 'DESC');;

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('name', 'LIKE', '%' . $search . '%')
              ->orWhere('username', 'LIKE', '%' . $search . '%')
              ->orWhere('email', 'LIKE', '%' . $search . '%')
              ->orWhere('phone', 'LIKE', '%' . $search . '%')
              ->orWhere('jdate', 'LIKE', '%' . $search . '%')
              ->orWhere('active_status', 'LIKE', '%' . $search . '%');
            });

          }
                $notes = $notes->paginate($limit)
                    ->appends([
                        'limit' => $limit
                    ]);

                    $this->data['active_user'] =  $notes;
                    $this->data['search'] = $search;
                    $this->data['page'] = 'admin.users.block-users';
                    return $this->admin_dashboard();


    }
    public function block_submit(Request $request)
    {

       $id= $request->id; // or any params
       $update_data['active_status']= $request->status;
      $user =  user::where('id',$id)->update($update_data);
     return redirect()->back()->with('message', 'User '.$request->status.' successfully');
   }




}