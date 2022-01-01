<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\slide;
use Illuminate\Support\Str;
class slidecontroller extends Controller
{
    function index(){
    	return view('Admin.addslide');
    }


    function insertslide(Request $req){


     
       $slide=array();
       $slide['publication_status']=$req->publication_status;
       $image=$req->file('img');

       
        if($image){
          $image_name=Str::random(20);
          $ext=strtolower($image->getClientOriginalName());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='images/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);

        	if($success){
        		$slide['slide_image']=$image_url;
        		db::table('slides')->insert($slide);
        		return redirect('addslide');


        	}

        }
        $slide['slide_image']='';
        DB::table('slides')->insert($slide);
        return redirect('addslide');


    }


    function allslide(){

               $data=slide::get();

             return view('Admin.allslide',['data'=>$data]);
}

function unactiveslide($slide_id){
    DB::table('slides')
    ->where('slide_id',$slide_id)
    ->update(['publication_status'=>0]);

    return redirect('allslide');
}

function activeslide($slide_id){
    DB::table('slides')
    ->where('slide_id',$slide_id)
    ->update(['publication_status'=>1]);

    return redirect('allslide');
}


function deleteslide($slide_id){

  DB::table('slides')
  ->where('slide_id',$slide_id)
  ->delete();

  return redirect('allslide');
}

}
