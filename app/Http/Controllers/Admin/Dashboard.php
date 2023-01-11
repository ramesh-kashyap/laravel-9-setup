<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {     
     
     $this->data['page'] = 'admin.dashboard';
     return $this->admin_dashboard();
     
    } 


}
