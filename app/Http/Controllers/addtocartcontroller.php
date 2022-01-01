<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cart;

class addtocartcontroller extends Controller
{

function index(){

	return view ('addtocart');
}

    function add_to_cart(request $req){

    	$quantity=$req->quantity;
    	$product_id=$req->product_id;

    	$product_info=DB::table('products')
    	             ->where('product_id',$product_id)
    	             ->first();

    	             $data['quantity']=$quantity;
    	             $data['id']=$product_info->product_id;
    	             $data['name']=$product_info->product_name;
    	             $data['price']=$product_info->product_price;
    	             $data['options']['image'] = $product_info->product_image;


    	             Cart::add($data);
    	            return redirect('/showcart');



    }


    function showcart(){

    	$catagory=DB::table('catagories')
    	         ->where('publication_status',1)
    	         ->get();

    	         

    	         return view('addtocart',['catagory',$catagory]);
    }

     function deletecart($Id){
          Cart::remove($Id);
          return view('/addtocart');
     	

    }

  

}
