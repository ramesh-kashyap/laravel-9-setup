<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Income;
use App\Models\Reward;
use App\Models\Boost_direct;
use Illuminate\Support\Facades\DB;
use Auth;
use Log;
use Redirect;
use Hash;
use Validator;

class Bonus extends Controller
{
    public function index(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : 10;
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Level Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.level-income';
        return $this->dashboard_layout();


    }

    public function direct_income(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : 10;
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Direct Income')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.direct-income';
        return $this->dashboard_layout();


    }

    public function autopool_income(Request $request)
    {
           $user=Auth::user();


          $limit = $request->limit ? $request->limit : 10;
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Autopool Income')->orderBy('id', 'DESC');

           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

    $this->data['level_income'] =$notes;
    $this->data['search'] =$search;
    $this->data['page'] = 'user.bonus.autopool_income';
    return $this->dashboard_layout();

    }

    public function booster_income(Request $request)
    {
           $user=Auth::user();


          $limit = $request->limit ? $request->limit : 10;
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Booster Income')->orderBy('id', 'DESC');

           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

    $this->data['level_income'] =$notes;
    $this->data['search'] =$search;
    $this->data['page'] = 'user.bonus.booster_income';
    return $this->dashboard_layout();

    }

    public function booster_direct(Request $request)
    {

      $user=Auth::user();

      $limit = $request->limit ? $request->limit : 10;
      $status = $request->status ? $request->status : null;
      $search = $request->search ? $request->search : null;
      $notes = Boost_direct::where('user_id',$user->id)->orderBy('id', 'DESC');

     if($search <> null && $request->reset!="Reset"){
      $notes = $notes->where(function($q) use($search){
        $q->Where('amount', 'LIKE', '%' . $search . '%')
        ->orWhere('bdate', 'LIKE', '%' . $search . '%')
        ->orWhere('remarks', 'LIKE', '%' . $search . '%');
      });

}

      $notes = $notes->paginate($limit)
          ->appends([
              'limit' => $limit
          ]);

      $this->data['level_income'] =$notes;
      $this->data['search'] =$search;
      $this->data['page'] = 'user.bonus.direct-booter';
      return $this->dashboard_layout();

    }

    public function SubmitBootsIncome(Request $request)
    {

  try{
            $validation =  Validator::make($request->all(), [
                'transaction_password' => 'required',
                'amount' => 'required',
                'type' => 'required|in:0,1',

            ]);

            if($validation->fails()) {
                Log::info($validation->getMessageBag()->first());

                return redirect()->route('user.booster-direct')->withErrors($validation->getMessageBag()->first())->withInput();
            }

              $user=Auth::user();
              $available_balance=0;
              $user_detail=User::where('username',$request->username)->orderBy('id','desc')->limit(1)->first();

              $available_balance=Auth::user()->direct_available_balance();
              $password= $request->transaction_password;
              $userID= $user->id;
              if ($request->type==0)
              {
              if($request->amount>5)
              {
                return Redirect::back()->withErrors(array('You can boost 5 $ at One time'));
              }
              }
              $counter =($request->amount/5);
              if (Hash::check($password, $user->tpassword))
              {

              if ($available_balance>=$request->amount)
              {
                  $data = [
                          'user_id' =>$user->id,
                          'remarks' => $request->type,
                          'amount' => $request->amount,
                          'bdate' => Date("Y-m-d"),
                           ];
                    $payment =  Boost_direct::insert($data);

                    if ($request->type==0)
                    {
                      for ($i=0; $i < $counter; $i++)
                    {
                      $round='boots_matrix';
                      $extra_round='extras_matrix';

                      $totalID = DB::table('boots_matrix')->count();
                      $totalID++;
                      if($totalID<10)
                      {
                      $username =substr(time(),-7).$totalID;
                      }
                      elseif($totalID<100 && $totalID>9){
                          $username =substr(time(),-6).$totalID;
                      }
                      elseif($totalID<1000 && $totalID>99){
                          $username =substr(time(),-5).$totalID;
                      }
                      elseif($totalID<10000 && $totalID>999){
                          $username =substr(time(),-4).$totalID;
                      }
                      elseif($totalID<100000 && $totalID>9999){
                          $username =substr(time(),-3).$totalID;
                      }
                      if ($round!='')
                      {
                        $Report=getTreeChildId($extra_round);

                        $table=$round;
                          $pos =$Report['position'];
                          if($pos=="1")
                          {
                              $pos = "Left";
                              $colunmUpdate= "paid_left";
                          }
                          else{
                              $pos = "Right";
                              $colunmUpdate= "paid_right";
                          }
                          $sponsor = $Report['parentId'];
                          $sponsor= ($sponsor)?$sponsor:0;

                          $userLevel = \DB::table($table)->where('user_id_fk',$sponsor)->first();
                          $mxLevel= (!empty($userLevel)?$userLevel->level+1:0);
                          $check_user=\DB::table($table)->where('user_id_fk',$username)->first();
                          if (!$check_user)
                          {
                              $data = [
                                  'ParentId' =>$sponsor,
                                  'sponsor' =>$sponsor,
                                  'level' => $mxLevel,
                                  'user_id' => $userID,
                                  'user_id_fk' => $username,
                                  'position' => $pos,
                              ];
                              DB::table($table)->insert($data);

                              if ($sponsor)
                              {
                                \DB::table($extra_round)->where('user_id_fk',$sponsor)->update([$colunmUpdate=>1]);
                              }

                          }


                      }

                      \DB::table('extras_matrix')->insert(['user_id_fk' =>$username,'user_id'=>$userID]);



                    }
                    }


                return redirect()->route('user.booster-direct')->with('messages', 'Transaction successfully');

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



          }
           catch(\Exception $e){
            Log::info('error here');
            Log::info($e->getMessage());
            // print_r($e->getMessage());
            // die("hi");
            return  redirect()->route('user.booster-direct')->withErrors('error', $e->getMessage())->withInput();
        }

    }

    public function boost_matrix(Request $request)
    {

      $user=Auth::user();

      $limit = $request->limit ? $request->limit : 10;
      $status = $request->status ? $request->status : null;
      $search = $request->search ? $request->search : null;
      $notes = \DB::table('boots_matrix')->where('user_id',$user->id)->orderBy('id', 'ASC');

     if($search <> null && $request->reset!="Reset"){
      $notes = $notes->where(function($q) use($search){
        $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
        ->orWhere('ParentId', 'LIKE', '%' . $search . '%')
        ->orWhere('sponsor', 'LIKE', '%' . $search . '%');
      });

}

      $notes = $notes->paginate($limit)
          ->appends([
              'limit' => $limit
          ]);

      $this->data['level_income'] =$notes;
      $this->data['search'] =$search;
      $this->data['page'] = 'user.bonus.boost-matrix';
      return $this->dashboard_layout();

    }

    public function growth_income(Request $request)
    {
           $user=Auth::user();


          $limit = $request->limit ? $request->limit : 10;
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Growth Bonus')->orderBy('id', 'DESC');

           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

    $this->data['level_income'] =$notes;
    $this->data['search'] =$search;
    $this->data['page'] = 'user.bonus.growth-bonus';
    return $this->dashboard_layout();

    }

    public function appraisal_bonus(Request $request)
    {
           $user=Auth::user();


          $limit = $request->limit ? $request->limit : 10;
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Appraisal Bonus')->orderBy('id', 'DESC');

           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }

            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

    $this->data['level_income'] =$notes;
    $this->data['search'] =$search;
    $this->data['page'] = 'user.bonus.appraisal-bonus';
    return $this->dashboard_layout();

    }
}
