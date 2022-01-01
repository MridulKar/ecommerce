<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class show_ordercontroller extends Controller
{
    function index(){

               $data=DB::table('orders')
                       ->join('customers','orders.customer_id','=','customers.customer_id')
                       
                       ->select('orders.*','customers.customer_name')
                       
                       ->get();

               return view('Admin.manage_order',['data'=>$data]);
    }
}
