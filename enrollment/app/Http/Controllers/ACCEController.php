<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ACCEController extends Controller
{
    public function acce(){
    	$acce_student_info=DB::table('student_tbl')
    	->where(['student_department'=>"ACCE"])
    	->get();

    	$manage_student=view('admin.acce')
    	     ->with('acce_student_info',$acce_student_info);
    	return view('layout')
    	  ->with('acce',$manage_student);
    	 
    }
}
