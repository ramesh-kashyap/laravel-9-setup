<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Log;
use Redirect;
use Hash;

class Invest extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $invest_check=Investment::where('user_id',$user->id)->where('status','!=','Decline')->orderBy('id','desc')->limit(1)->first();

        $this->data['last_package'] = ($invest_check)?$invest_check->amount:0;
        $this->data['page'] = 'user.invest.Deposit';
        return $this->dashboard_layout();
    }


    public function fundActivation(Request $request)
    {


      try{
            $validation =  Validator::make($request->all(), [
                // 'user_id' => 'required',
                'amount' => 'required|numeric|min:0',
                'user_id' => 'required|exists:users,username',
<<<<<<< HEAD
                'transaction_password' => 'required',          
                     
              
=======
                'transaction_password' => 'required',


>>>>>>> 21ac9f4462982d86f53b69f2e1705a3f83a38b58
            ]);

            if($validation->fails()) {
                Log::info($validation->getMessageBag()->first());

                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }
               $user=Auth::user();
               $password= $request->transaction_password;
               if (Hash::check($password, $user->tpassword))
               {
<<<<<<< HEAD
                 
               $balance=Auth::user()->FundBalance();
                
=======

               $balance=Auth::user()->FundBalance();

>>>>>>> 21ac9f4462982d86f53b69f2e1705a3f83a38b58
              $user_detail=User::where('username',$request->user_id)->orderBy('id','desc')->limit(1)->first();
                //   $icon_image = $request->file('icon_image');
                  // print_r($user_detail);die;
                $invest_check=Investment::where('user_id',$user_detail->id)->orderBy('id','desc')->limit(1)->first();


                    $invoice = substr(str_shuffle("0123456789"), 0, 7);
                  $last_package=($invest_check)?$invest_check->amount:0;

<<<<<<< HEAD
              
                  if (!empty($invest_check) && $user_detail->active_status!="Inactive")
                  {                 
                    return Redirect::back()->withErrors(array('User Already Activated'));
                  }

                //   if ($last_package>$request->amount) 
                //   {
                //     return Redirect::back()->withErrors(array('Please choose amount above last package &#8377; '.$request->amount));
                //   }
                     
                      // dd($balance);
                    if ($balance>=$request->amount)
                     {
          
=======

                  if (!empty($invest_check) && $user_detail->active_status!="Inactive")
                  {
                    return Redirect::back()->withErrors(array('User Already Activated'));
                  }

                //   if ($last_package>$request->amount)
                //   {
                //     return Redirect::back()->withErrors(array('Please choose amount above last package &#8377; '.$request->amount));
                //   }

                      // dd($balance);
                    if ($balance>=$request->amount)
                     {

>>>>>>> 21ac9f4462982d86f53b69f2e1705a3f83a38b58

                   $data = [
                        'plan' => 1,
                        'transaction_id' =>md5(uniqid(rand(), true)),
                        'user_id' => $user_detail->id,
                        'user_id_fk' => $user_detail->username,
                        'amount' => $request->amount,
                        'payment_mode' => 'USDT',
                        'status' => 'Active',
                        'sdate' => Date("Y-m-d"),
                        'active_from' => $user->username,
                        'walletType' =>1,
<<<<<<< HEAD
                        
                    ];
                    $payment =  Investment::insert($data);

             
                    if ($user_detail->active_status=="Pending") 
=======

                    ];
                    $payment =  Investment::insert($data);


                    if ($user_detail->active_status=="Pending")
>>>>>>> 21ac9f4462982d86f53b69f2e1705a3f83a38b58
                    {
                     $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$request->amount);
                      User::where('id',$user_detail->id)->update($user_update);
                    }
                    else
                    {
                      $user_update=array('active_status'=>'Active','package'=>$request->amount);
<<<<<<< HEAD
                      User::where('id',$user_detail->id)->update($user_update); 
                    }

                    
                    add_direct_income($user_detail->id,$request->amount);
                
           
            
             $notify[] = ['success', $user_detail->username.' User Activation  Submited successfully'];
             return redirect()->back()->withNotify($notify);
      
=======
                      User::where('id',$user_detail->id)->update($user_update);
                    }


                    add_direct_income($user_detail->id,$request->amount);



             $notify[] = ['success', $user_detail->username.' User Activation  Submited successfully'];
             return redirect()->back()->withNotify($notify);

>>>>>>> 21ac9f4462982d86f53b69f2e1705a3f83a38b58
              }
              else
              {
                 return Redirect::back()->withErrors(array('Insufficient Balance in Wallet'));
              }
            }
            else
            {
              return Redirect::back()->withErrors(array('Invalid Transaction Password'));
            }
<<<<<<< HEAD
                 
=======

>>>>>>> 21ac9f4462982d86f53b69f2e1705a3f83a38b58

          }
           catch(\Exception $e){
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
              }
        }


<<<<<<< HEAD
=======
        public function invest_list(Request $request)
        {

            $user=Auth::user();

            $limit = $request->limit ? $request->limit : 10;
             $status = $request->status ? $request->status : null;
             $search = $request->search ? $request->search : null;
             $notes = Investment::where('user_id',$user->id);
            if($search <> null && $request->reset!="Reset"){
             $notes = $notes->where(function($q) use($search){
               $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
               ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
               ->orWhere('status', 'LIKE', '%' . $search . '%')
               ->orWhere('type', 'LIKE', '%' . $search . '%')
               ->orWhere('amount', 'LIKE', '%' . $search . '%');
             });

            }

             $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

           $this->data['search'] =$search;
           $this->data['deposit_list'] =$notes;
           $this->data['page'] = 'user.invest.DepositHistory';
           return $this->dashboard_layout();

        }

>>>>>>> 21ac9f4462982d86f53b69f2e1705a3f83a38b58
}
