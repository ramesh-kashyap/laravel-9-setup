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

        $notes = User::orderBy('id', 'DESC')->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

       if($search <> null && $request->reset!="Reset"){
        $notes = User::where(function($q) use($search){
          $q->Where('name', 'LIKE', '%' . $search . '%')
          ->orWhere('username', 'LIKE', '%' . $search . '%')
          ->orWhere('email', 'LIKE', '%' . $search . '%')
          ->orWhere('phone', 'LIKE', '%' . $search . '%')
          ->orWhere('jdate', 'LIKE', '%' . $search . '%')
          ->orWhere('active_status', 'LIKE', '%' . $search . '%');
        })->orderBy('id', 'DESC')->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

      }

      $this->data['active_user'] =  $notes;
      $this->data['search'] = $search;
      $this->data['page'] = 'admin.users.allUser';
      return $this->admin_dashboard();
    }

    

    public function active_users(Request $request)
    {     
        $limit = $request->limit ? $request->limit : 10;
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = User::where('active_status','Active')->orderBy('id', 'DESC');;
            
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


}
