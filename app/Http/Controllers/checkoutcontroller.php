<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cart;
class checkoutcontroller extends Controller
{
    function index(){

    	return view('customerlogin');
    }

    function signup(Request $req){

      $data=array();
      $data['customer_name']=$req->name;
      $data['customer_email']=$req->email;
      $data['customer_password']=$req->password;
      $data['customer_phone']=$req->phone;
      $data['customer_address']=$req->address;

      $customer_id=DB::table('customers')
                ->insertGetId($data);

              $req->session()->put('customer_id',$customer_id);
                $req->session()->put('customer_name',$req->name);

                return redirect('/customer_checkout');

    }

    function checkout(){
    	return view('/card_checkout');
    }


    function login(Request $req){

    	      $customer_email=$req->email;
        $customer_password=$req->password;

        $data = DB::table('customers')
                    ->where('customer_email', $customer_email)
                    ->where('customer_password', $customer_password)
                    ->first();

     
          if($data){
               $req->session()->put('customer_id',$data->customer_id);
            return redirect('/customer_checkout');
          }
          else{
             $req->session()->flash('message','Invalid Email or Password');
            return redirect()->back();
          }
          
    }

function logout(Request $req){

    	$req->session()->flush();
    	return redirect('/');
    }

  function save(Request $req){

      $data=array();
      $data['shipping_email']=$req->email;
      $data['shipping_name']=$req->name;
    
      $data['shipping_phone']=$req->phone;
      $data['shipping_address']=$req->address;
      $data['shipping_city']=$req->city;
      $shipping_id=DB::table('shipping')
              ->insertGetId($data);

             $req->session()->put('shipping_id',$shipping_id);
               return redirect("/payment");
           
    }

    function payment(){
      
      return view('payment');
    }

     function payment_done(Request $req){
      
      $payment_method=$req->payment_method;
      $pdata=array();
      $pdata['payment_method']=$payment_method;
      $pdata['payment_status']="Pending";

      $payment_id=DB::table('payments')
                  ->insertGetId($pdata);
    
         
 
      $odata= array();
      $odata['customer_id']=session()->get('customer_id');
      $odata['shipping_id']=session()->get('shipping_id');
      $odata['payment_id']=$payment_id;
      $odata['order_total']=Cart::getTotal();
      $odata['order_status']="pending";

     $order_id=DB::table('orders')
               ->insertGetId($odata);
 

$content=Cart::getContent();
      
      $cdata=array();

      foreach ($content as $item) {
               
               $cdata['order_id']=$order_id;
               $cdata['product_id']=$item->id;
               $cdata['product_name']=$item->name;
               $cdata['product_price']=$item->price;
               $cdata['product_sales_quantity']=$item->quantity;
              
               DB::table('order_details')
               ->insert($cdata); 
               }


       if($payment_method == "hand_cash"){
       
        Cart::clear();
       	return view('/payment_success');
        
       }
       elseif($payment_method == "bkash"){
         
         Cart::clear();
     	return view('/bkash_payment');
       }
       else{
       	echo 'not selected'; 

 }

    

 
      

   } 


}
