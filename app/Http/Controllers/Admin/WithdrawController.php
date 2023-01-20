<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use Carbon\Carbon;
use App\Models\User;

class WithdrawController extends Controller
{
    public function withdraw_request_user(Request $request)
    {
        $limit = $request->limit ? $request->limit : 10;
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Withdraw::select('withdraws.*')->where('status','Pending')->join('users', 'users.id', '=', 'withdraws.user_id')->where('users.active_status','Active');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('txn_id', 'LIKE', '%' . $search . '%')
              ->orWhere('wdate', 'LIKE', '%' . $search . '%');
            });

          }
    $notes = $notes->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);

        $this->data['withdraw_request_user'] =  $notes;
        $this->data['search'] = $search;
        $this->data['page'] = 'admin.withdraw.withdraw-request-users';
        return $this->admin_dashboard();


    }

    public function withdraw_request_done(Request $request)
    {

       $id= $request->id ; // or any params
       $withdraw_status= $request->withdraw_status ; // or any params
        $withdraw_id = Withdraw::where('id',$id)->first();
        $user_id = User::where('id',$withdraw_id->user_id)->first();

     if ($withdraw_status=="success")
      {

      $update_data['status']= 'Approved';
      $update_data['paid_date']= Carbon::now();
      $user =  Withdraw::where('id',$id)->update($update_data);

    //   if($withdraw_id->wdate >"2022-02-25" && $withdraw_id->payment_mode=="USDT")
    //   {
    //    $reinvet_=$user_id->reinvest_amt+$withdraw_id->amount*50/100;
    //    $user_update=array('reinvest_amt'=>$reinvet_);
    //    User::where('id',$user_id->id)->update($user_update);
    //   }

     return redirect()->back()->with('message', 'Withdraw request Approved successfully');
      }
      else
      {
         $update_data['status']= 'Failed';
      $user =  Withdraw::where('id',$id)->update($update_data);
      return redirect()->back()->with('message', 'Withdraw request Rejected successfully');
      }




   }

    public function withdraw_history_user(Request $request)
    {
        $limit = $request->limit ? $request->limit : 10;
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Withdraw::paginate($limit)
            ->appends([
                'limit' => $limit
            ]);

       if($search <> null && $request->reset!="Reset"){
        $notes = $notes->where(function($q) use($search){
          $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('amount', 'LIKE', '%' . $search . '%')
          ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('status', 'LIKE', '%' . $search . '%')
          ->orWhere('txn_id', 'LIKE', '%' . $search . '%')
          ->orWhere('wdate', 'LIKE', '%' . $search . '%');
        })->paginate($limit)
            ->appends([
                'limit' => $limit
            ]);

  }

        $this->data['withdraw_request_user'] =  $notes;
        $this->data['search'] = $search;
        $this->data['page'] = 'admin.withdraw.withdraw-history-users';
        return $this->admin_dashboard();



    }
}
