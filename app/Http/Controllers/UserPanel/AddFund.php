<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyFund;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Log;
class AddFund extends Controller
{

public function index(Request $request)
{

$user=Auth::user();
 $limit = $request->limit ? $request->limit : 10;
  $status = $request->status ? $request->status : null;
  $search = $request->search ? $request->search : null;
<<<<<<< HEAD
  $notes = BuyFund::where('user_id',$user->id);      
 if($search <> null && $request->reset!="Reset"){
  $notes = $notes->where(function($q) use($search){
    $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')          
=======
  $notes = BuyFund::where('user_id',$user->id);
 if($search <> null && $request->reset!="Reset"){
  $notes = $notes->where(function($q) use($search){
    $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
>>>>>>> 21ac9f4462982d86f53b69f2e1705a3f83a38b58
    ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
    ->orWhere('status', 'LIKE', '%' . $search . '%')
    ->orWhere('type', 'LIKE', '%' . $search . '%')
    ->orWhere('amount', 'LIKE', '%' . $search . '%');
  });

 }

  $notes = $notes->paginate($limit)
      ->appends([
          'limit' => $limit
      ]);

$this->data['search'] =$search;
$this->data['level_income'] =$notes;
$this->data['page'] = 'user.fund.addFund';
return $this->dashboard_layout();

}



public function SubmitBuyFund(Request $request)
{

  try{
        $validation =  Validator::make($request->all(), [
            'amount' => 'required|numeric|min:0',
            'transaction_hash' => 'required',
            'icon_image'=>'max:4096|mimes:jpeg,png,jpg,svg',
<<<<<<< HEAD
                              
=======

>>>>>>> 21ac9f4462982d86f53b69f2e1705a3f83a38b58
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return redirect()->route('user.AddFund')->withErrors($validation->getMessageBag()->first())->withInput();
        }
<<<<<<< HEAD
         
            
=======


>>>>>>> 21ac9f4462982d86f53b69f2e1705a3f83a38b58
        $icon_image = $request->file('icon_image');
        $imageName = time().'.'.$icon_image->extension();
        $request->icon_image->move(public_path('slip/'),$imageName);

        $user=Auth::user();

<<<<<<< HEAD
               $data = [ 
=======
               $data = [
>>>>>>> 21ac9f4462982d86f53b69f2e1705a3f83a38b58
                    'txn_no' =>$request->transaction_hash,
                    'user_id' => $user->id,
                    'user_id_fk' => $user->username,
                    'amount' => $request->amount,
                    'slip' => 'public/slip/'.$imageName,
                    'type' => 'USDT',
                    'bdate' => Date("Y-m-d"),
<<<<<<< HEAD
                    
                ];
               $payment =  BuyFund::create($data);
          
   
=======

                ];
               $payment =  BuyFund::create($data);


>>>>>>> 21ac9f4462982d86f53b69f2e1705a3f83a38b58
      $notify[] = ['success', 'Fund Request Submited successfully'];
      return redirect()->back()->withNotify($notify);
      }
       catch(\Exception $e){
        Log::info('error here');
        Log::info($e->getMessage());
        print_r($e->getMessage());
        die("hi");
        return  redirect()->route('user.AddFund')->withErrors('error', $e->getMessage())->withInput();
    }

}



}
