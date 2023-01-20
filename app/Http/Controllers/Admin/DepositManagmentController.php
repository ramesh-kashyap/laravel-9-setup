<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investment;

class DepositManagmentController extends Controller
{
    public function deposit_request(Request $request)
    {
        $limit = $request->limit ? $request->limit : 10;
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Investment::where('status','Pending')->orderBy('id', 'DESC');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('sdate', 'LIKE', '%' . $search . '%')
              ->orWhere('status', 'LIKE', '%' . $search . '%')
              ->orWhere('transaction_id', 'LIKE', '%' . $search . '%');
            });

          }
    $notes = $notes->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);

        $this->data['deposit_list'] =  $notes;
        $this->data['search'] = $search;
        $this->data['page'] = 'admin.depositManagment.deposit-request';
        return $this->admin_dashboard();
    }


    public function deposit_request_done(Request $request)
    {

       $id= $request->id ; // or any params
       $user_id= $request->user_Id ; // or any params
       $withdraw_status= $request->withdraw_status ; // or any params
        $user = Investment::where('id',$id)->first();

     if ($withdraw_status=="success")
      {
         $users = User::where('id',$user_id)->first();

           $today=date("Y-m-d");

         if ($users->active_status=="Pending")
          {
             $datas = [
               'cycle' => 1,
               'days' =>15,
               'user_id' => $user->user_id,
               'withdraw_date' =>date('Y-m-d', strtotime($today. ' + 15 day')),
           ];
           $payment =  Extra_user::firstOrCreate(['user_id'=>$user->user_id],$datas);



           $user_update=array('active_status'=>'Active','adate'=>Date("Y-m-d H:i:s"),'package'=>$user->amount);
          User::where('id',$users->id)->update($user_update);

         }
         User::where('id',$users->id)->update(['package' => $user->amount,'active_status'=>'Active']);
         $invest_check=Investment::where('user_id',$users->id)->where('status','Active')->orderBy('id','desc')->limit(1)->first();
         $totalDeposit=Investment::where('user_id',$users->id)->where('status','Active')->orderBy('id','desc')->count();
         $extra_user=Extra_user::where('user_id',$users->id)->first();
         $InsertDays= 15;
         $InsertstartDate = date('Y-m-d', strtotime("+1 day", strtotime($today)));
         if ($invest_check)
         {
          if ($totalDeposit%2==0)
          {
           $InsertDays= $invest_check->days+1;
          }
          else
          {
           $InsertDays= $invest_check->days;
          }

          if ($extra_user)
          {
           if ($extra_user->withdraw_date<$today)
           {
             $InsertstartDate = date('Y-m-d', strtotime("+2 day", strtotime($today)));
           }
           else
           {
           $InsertstartDate = date('Y-m-d', strtotime("+1 day", strtotime($today)));
           }
          }
         }

         $todays=date("Y-m-d");

         if ($extra_user)
         {
          if ($extra_user->withdraw_date<=$todays && $totalDeposit>0)
          {
            Income::where('user_id',$users->id)->where('remarks','Growth Bonus')->where('invest_id',$invest_check->id)->update(['credit_type' =>0]);
            Investment::where('id',$invest_check->id)->update(['roiCandition' =>1]);
            $newCycle=$extra_user->cycle+1;
            $withdraw_date=  date('Y-m-d', strtotime('+ '.$InsertDays.' day', strtotime($todays)));
            Extra_user::where('user_id',$users->id)->update(['cycle' =>$newCycle,'days'=>$InsertDays,'withdraw_date'=>$withdraw_date]);
          }
         }
         add_level_income($user->user_id,$user->amount);

         $update_data['status']= 'Active';
         $update_data['roiStartDate']=  $InsertstartDate;
         $update_data['days']= $InsertDays;
         Investment::where('id',$id)->update($update_data);
     return redirect()->back()->with('message', 'Deposit request Approved successfully');
      }
      else
      {
         $update_data['status']= 'Decline';
   //   $user =  Investment::where('id',$id)->delete();
      Investment::where('id',$id)->update($update_data);
      return redirect()->back()->with('message', 'Deposit request Rejected successfully');
      }



   }

    public function deposit_list_decline(Request $request)
    {

        $limit = $request->limit ? $request->limit : 10;
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Investment::where('status','Decline')->orderBy('id', 'DESC');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('sdate', 'LIKE', '%' . $search . '%')
              ->orWhere('status', 'LIKE', '%' . $search . '%')
              ->orWhere('transaction_id', 'LIKE', '%' . $search . '%');
            });

          }
    $notes = $notes->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);


      $this->data['deposit_list'] =  $notes;
      $this->data['search'] = $search;
      $this->data['page'] = 'admin.depositManagment.deposit-decline';
      return $this->admin_dashboard();

    }



    public function deposit_approved_list(Request $request)
    {

        $limit = $request->limit ? $request->limit : 10;
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Investment::where('status','Active')->orderBy('id', 'DESC');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('sdate', 'LIKE', '%' . $search . '%')
              ->orWhere('status', 'LIKE', '%' . $search . '%')
              ->orWhere('transaction_id', 'LIKE', '%' . $search . '%');
            });

          }
    $notes = $notes->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);


      $this->data['deposit_list'] =  $notes;
      $this->data['search'] = $search;
      $this->data['page'] = 'admin.depositManagment.deposit-list-approved';
      return $this->admin_dashboard();

    }




}
