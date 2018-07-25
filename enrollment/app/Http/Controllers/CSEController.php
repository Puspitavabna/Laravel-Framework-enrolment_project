<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CSEController extends Controller
{
     public function cse(){
        
    	// return view('admin.cse');
    	$csestudent_info=DB::table('student_tbl')
    	->where(['student_department'=>"CSE"])
    	->get();
      
    	$manage_student=view('admin.cse')
    	     ->with('cse_student_info',$csestudent_info);
    	return view('layout')
    	  ->with('cse',$manage_student);


    	  //return view('admin.cse');
        
        // echo "</pre>";
         
        // print_r($csestudent_info);

      
    	/// $manage_student=view('admin.allstudent')
    	// ->with('all_student_info',$all_student_info);
    	// return view('layout')
    	// ->with('allstudent',$manage_student);
    }
}
