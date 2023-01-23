<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyFund;
use Illuminate\Support\Facades\Crypt;

class FundController extends Controller
{
    public function add_fund_report(Request $request)
    {


        $limit = $request->limit ? $request->limit : 10;
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = BuyFund::where('status','Pending')->orderBy('id', 'DESC');

        if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
                $q->Where('txn_no', 'LIKE', '%' . $search . '%')
                ->orWhere('bdate', 'LIKE', '%' . $search . '%')
                ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
                ->orWhere('status', 'LIKE', '%' . $search . '%')
                ->orWhere('type', 'LIKE', '%' . $search . '%');
            });

          }
    $notes = $notes->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);


                $this->data['add_fund_report'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.fund.add-fund-list';
                return $this->admin_dashboard();
    }

    public function fund_request_done(Request $request)
    {

       $id= $request->id ; // or any params
       $user_id= $request->user_Id ; // or any params
       $withdraw_status= $request->withdraw_status ; // or any params
        $user = BuyFund::where('id',$id)->first();

     if ($withdraw_status=="success")
      {
          $update_data['status']= 'Approved';
          BuyFund::where('id',$id)->update($update_data);

     return redirect()->back()->with('message', 'Fund request Approved successfully');
      }
      else
      {
         $update_data['status']= 'Failed';
   //   $user =  Investment::where('id',$id)->delete();
        BuyFund::where('id',$id)->update($update_data);
      return redirect()->back()->with('message', 'Fund request Rejected successfully');
      }

   }

   public function all_fund_reports(Request $request)
   {

    $limit = $request->limit ? $request->limit : 10;
    $status = $request->status ? $request->status : null;
    $search = $request->search ? $request->search : null;

    $notes = BuyFund::paginate($limit)
        ->appends([
            'limit' => $limit
        ]);


   if($search <> null && $request->reset!="Reset"){
    $notes = BuyFund::where(function($q) use($search){
      $q->Where('txn_no', 'LIKE', '%' . $search . '%')
      ->orWhere('bdate', 'LIKE', '%' . $search . '%')
      ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
      ->orWhere('status', 'LIKE', '%' . $search . '%')

      ->orWhere('type', 'LIKE', '%' . $search . '%');
    })->paginate($limit)
        ->appends([
            'limit' => $limit
        ]);

}
$this->data['all_fund_reports'] =  $notes;
$this->data['search'] = $search;
$this->data['page'] = 'admin.fund.all-fund-reports';
return $this->admin_dashboard();
   }
}
