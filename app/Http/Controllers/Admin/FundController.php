<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FundController extends Controller
{
    public function add_fund_report(Request $request)
    {


        $limit = $request->limit ? $request->limit : 10;
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;

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

            $notes = BuyFund::paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);

                $this->data['direct_incomes'] =  $notes;
                $this->data['search'] = $search;
                $this->data['page'] = 'admin.fund.add-fund-list';
                return $this->admin_dashboard();
    }
}
