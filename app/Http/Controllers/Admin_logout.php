<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use session;
class Admin_logout extends Controller
{
    public function logout(Request $req){
    	$req->session()->flush();
    	return redirect('admin_login');
    }
}
