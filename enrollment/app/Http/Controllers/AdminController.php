<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class AdminController extends Controller
{
    public function admin_dashboard(){
    	return view('admin.dashboard');
    }

    //viewprofile
    public function viewprofile(){
    	return view('admin.view');
    }

    //setting
    public function setting(){
    	return view('admin.setting');
    }

    //logout part
    public function logout(){
        	Session::put('admin_name',null);
        	Session::put('admin_id',null);

        	return Redirect::to('/backend');
    }

    public function login_dashboard(Request $request){


    	//return view('admin.dashboard');
   
    $email=$request->admin_email;
    $password=md5($request->admin_password);
    $result=DB::table("admin_tbl")
    ->where('admin_email',$email)
    ->where('admin_password',$password)
    ->first();

    echo "</pre>";
    print_r($result);

    if($result){
    	Session::put('admin_email',$result->admin_email);
    	Session::put('admin_password',$result->admin_password);
    	return Redirect::to('/admin_dashboard');
     }
     else{
     	Session::put('exception','Email or password Invalid');
     	return Redirect::to('/backend');
     }
 }
}
