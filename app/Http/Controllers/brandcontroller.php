<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Brand;

class brandcontroller extends Controller
{
    function index(){
    	return view('Admin.addbrand');
    }

function insertbrand(Request $req){

        $brand=new Brand;
        $brand->brand_name=$req->brand_name;
        $brand->brand_description=$req->brand_description;
        $brand->publication_status=$req->publication_status;

        $brand->save();
        
        return view('Admin.addbrand');

}


    function show(Request $req){

       $data=Brand::get();

    return view('Admin.allbrand',['data'=>$data]);

    }


    function unactivebrand($brand_id){
    DB::table('brands')
    ->where('brand_id',$brand_id)
    ->update(['publication_status'=>0]);

    return redirect('allbrand');
}

 function activebrand($brand_id){
    DB::table('brands')
    ->where('brand_id',$brand_id)
    ->update(['publication_status'=>1]);

    return redirect('allbrand');
}

function editbrand($brand_id){


     $data=DB::table('brands')
     ->where('brand_id',$brand_id)
     ->first();

return view('Admin.editbrand',['data'=>$data]);

}

function updatebrand($brand_id, Request $req){

$value=array();
$value['brand_name']=$req->brand_name;
$value['brand_description']=$req->brand_description;

 DB::table('brands')
 ->where('brand_id',$brand_id)
 ->update($value);

  return redirect('allbrand');

}

function deletebrand($brand_id){

  DB::table('brands')
  ->where('brand_id',$brand_id)
  ->delete();

  return redirect('allbrand');
}


}
