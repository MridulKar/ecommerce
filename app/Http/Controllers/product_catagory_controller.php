<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\product;

class product_catagory_controller extends Controller
{
     function catagory_product($catagory_id){
           
           $product=DB::table('products')
                       ->join('catagories','products.catagory_id','=','catagories.catagory_id')
                       ->join('brands','products.brand_id','=','brands.brand_id')
                       ->select('products.*','catagories.catagory_name','brands.brand_name')
                       ->where('products.catagory_id',$catagory_id)
                       ->where('products.publication_status',1)
                       ->limit(9)
                       ->get();

              return view('product_catagory',['product'=>$product]);
                  



   }

    function product_brand($brand_id){
           
           $product=DB::table('products')
                       ->join('catagories','products.catagory_id','=','catagories.catagory_id')
                       ->join('brands','products.brand_id','=','brands.brand_id')
                       ->select('products.*','catagories.catagory_name','brands.brand_name')
                       ->where('products.brand_id',$brand_id)
                       ->where('products.publication_status',1)
                       ->limit(9)
                       ->get();

              return view('product_brand',['product'=>$product]);
                  



   }

}
