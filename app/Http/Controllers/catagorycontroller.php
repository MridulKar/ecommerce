<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\catagory;

class catagorycontroller extends Controller
{
   function index(){
   	return view('Admin.addcatagory');
   }
function allcatagory(){

               $data=catagory::get();

               return view('Admin.allcatagory',['data'=>$data]);
}

function insert(Request $req){
        $catagory=new catagory;
        $catagory->catagory_name=$req->catagory_name;
        $catagory->catagory_description=$req->catagory_description;
        $catagory->publication_status=$req->product_status;

       $catagory->save();
       return redirect('addcatagory');
}

function unactive($catagory_id){
    DB::table('catagories')
    ->where('catagory_id',$catagory_id)
    ->update(['publication_status'=>0]);

    return redirect('allcatagory');
}

function active($catagory_id){
    DB::table('catagories')
    ->where('catagory_id',$catagory_id)
    ->update(['publication_status'=>1]);

    return redirect('allcatagory');
}


function edit($catagory_id){


     $data=DB::table('catagories')
     ->where('catagory_id',$catagory_id)
     ->first();

return view('Admin.edit',['data'=>$data]);

}

function update($catagory_id, Request $req){

$value=array();
$value['catagory_name']=$req->catagory_name;
$value['catagory_description']=$req->catagory_description;

 DB::table('catagories')
 ->where('catagory_id',$catagory_id)
 ->update($value);

  return redirect('allcatagory');

}

function delete($catagory_id){

  DB::table('catagories')
  ->where('catagory_id',$catagory_id)
  ->delete();

  return redirect('allcatagory');
}


}
