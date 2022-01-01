<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\product;

class homecontroller extends Controller
{
    function index(){
   	 $data=DB::table('products')
                       ->join('catagories','products.catagory_id','=','catagories.catagory_id')
                       ->join('brands','products.brand_id','=','brands.brand_id')
                       ->select('products.*','catagories.catagory_name','brands.brand_name')
                       ->where('products.publication_status',1)
                       ->limit(6)
                       ->get();

               return view('home',['data'=>$data]);
   }



}
