<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\product;
use Illuminate\Support\Str;

class productcontroller extends Controller
{
    function index(){
    	return view('Admin.addproduct');
    }
    function insertproduct(Request $req){
    	

    	 $product=array();
        
        $product['catagory_id']=$req->catagory_id;
        $product['brand_id']=$req->brand_id;
        $product['product_name']=$req->product_name;
      
        $product['product_price']=$req->product_price;
  
        $product['publication_status']=$req->publication_status;



        $image=$req->file('img');
     
       
        if($image){
          $image_name=Str::random(20);
          $ext=strtolower($image->getClientOriginalName());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='images/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);

        	if($success){
        		$product['product_image']=$image_url;
        		db::table('products')->insert($product);
        		return redirect('addproduct');


        	}

        }
        $product['product_image']='';
        DB::table('products')->insert($product);
        return redirect('addproduct');




    }




    function show(Request $req){

                 $data=DB::table('products')
                       ->join('catagories','products.catagory_id','=','catagories.catagory_id')
                       ->join('brands','products.brand_id','=','brands.brand_id')
                       ->select('products.*','catagories.catagory_name','brands.brand_name')
                       ->where('brands.publication_status',1)
                       ->where('catagories.publication_status',1)
                       ->get();

               return view('Admin.allproduct',['data'=>$data]);


    }


    function unactiveproduct($product_id){
    DB::table('products')
    ->where('product_id',$product_id)
    ->update(['publication_status'=>0]);

    return redirect('allproduct');
}

 function activeproduct($product_id){
    DB::table('products')
    ->where('product_id',$product_id)
    ->update(['publication_status'=>1]);

    return redirect('allproduct');
}



function deleteproduct($product_id){

  DB::table('products')
  ->where('product_id',$product_id)
  ->delete();

  return redirect('allproduct');
}

function view_product($product_id){


               $data=DB::table('products')
                       ->join('catagories','products.catagory_id','=','catagories.catagory_id')
                       ->join('brands','products.brand_id','=','brands.brand_id')
                       ->select('products.*','catagories.catagory_name','brands.brand_name')
                       ->where('product_id',$product_id)
                       ->get();

               return view('product_detail',['data'=>$data]);
}

}
