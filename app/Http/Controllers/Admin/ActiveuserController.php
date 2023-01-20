<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use App\Models\Income;
use App\Models\Investment;
use App\Models\Extra_user;
use App\Models\Bank;
use Auth;
use DB;
use Log;
use Validator;
use Redirect;

class ActiveuserController extends Controller
{
    public function active_user(Request $request)
    {
     $profiles = User::where('id',$request->id)->first();
     $bank = Bank::where('user_id',$request->user_id)->first();
    $this->data['bank'] =  $bank;
    $this->data['profiles'] =  $profiles;
    $this->data['page'] = 'admin.activationUsers.activate_user_view';
    return $this->admin_dashboard();

    }

    public function pending_users(Request $request)
    {
        $limit = $request->limit ? $request->limit : 10;
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = User::where('active_status','Pending')->orderBy('id', 'DESC');

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
     $this->data['page'] = 'admin.activationUsers.pending-user';
     return $this->admin_dashboard();

    }

    public function activate_admin_post(Request $request)
    {


   try{
            $validation =  Validator::make($request->all(), [
                'user_id' => 'required|exists:users,username',
                'amount' => 'required',
            ]);

            if($validation->fails()) {
                Log::info($validation->getMessageBag()->first());

                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }

                $user=User::where('username',$request->user_id)->orderBy('id','desc')->first();
                $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();
                $totalDeposit=Investment::where('user_id',$user->id)->where('status','Active')->orderBy('id','desc')->count();

                  $invoice = substr(str_shuffle("0123456789"), 0, 7);
                  $today= date("Y-m-d");
                  $InsertstartDate = date('Y-m-d', strtotime($today));

                  $check_ex= ($invest_check)?$invest_check->amount:0 ;

                if ($request->amount<$check_ex)
                {

                  return Redirect::back()->withErrors(array('Please choose above package of '.$request->amount));
                }
                else
                {
                   $data = [
                        'plan' => $invoice,
                        'transaction_id' =>md5(uniqid(rand(), true)),
                        'user_id' => $user->id,
                        'user_id_fk' => $user->username,
                        'amount' => $request->amount,
                        'payment_mode' => 'USDT',
                        'status' => 'Active',
                        'sdate' => Date("Y-m-d"),
                        'roiStartDate' =>$InsertstartDate,
                        'active_from' => $user->username,

                    ];

                   $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$request->amount);
                   if ($user->active_status=="Pending")
                   {
                    User::where('id',$user->id)->update($user_update);

                   }


                   User::where('id',$user->id)->update(['package' => $request->amount,'active_status'=>'Active']);

                    //add_direct_income($user->id,$request->amount);

                   $payment =  Investment::insert($data);


              }
            //   return redirect()->route('admin.active-user')->with('messages', ' User Activation  Submited successfully');



              $notify[] = ['success', 'User Activation  Submited successfully'];
              return redirect()->back()->withNotify($notify);

                }
                 catch(\Exception $e){
                  Log::info('error here');
                  Log::info($e->getMessage());
                  print_r($e->getMessage());
                dd($e->getMessage());
                  return back()->withErrors('error', $e->getMessage())->withInput();
              }

    }
}
