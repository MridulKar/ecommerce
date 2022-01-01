<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class admin_login extends Controller
{

function verify(Request $request){


        $admin_email=$request->admin_email;
        $admin_password=$request->admin_password;

        $data = DB::table('admin_users')
                    ->where('admin_email', $admin_email)
                    ->where('admin_password', $admin_password)
                    ->first();

     
          if($data){
             $request->session()->put('admin_name',$data->admin_name);
            return redirect('/dashboard');
          }
          else{
             $request->session()->flash('message','Invalid Email or Password');
            return redirect()->back();
          }

 }  
}

