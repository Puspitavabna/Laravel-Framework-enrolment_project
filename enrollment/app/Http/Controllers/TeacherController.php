<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\facades\Redirect;
use DB;
use Session;
Session_start();


class TeacherController extends Controller
{
     public function allteacher(){
     	
    	$all_teacher_info=DB::table('teacher_tbl')
    	->get();

    	$manage_teacher=view('admin.allteacher')
    	->with('all_teacher_info',$all_teacher_info);
    	return view('layout')
    	->with('allteacher',$manage_teacher);
   
    	
    }
    public function addteacher(){
    	return view('admin.add_teacher');
    }
    public function saveteacher(Request $request){
    	$data=array();
    	$data['teacher_name']=$request->teacher_name;
    	
    	$data['teacher_email']=$request->teacher_email;
    	$data['teacher_phone']=$request->teacher_phone;
    	
    	
    	$data['teacher_password']=$request->teacher_password;
    	$data['teacher_department']=$request->teacher_department;


        DB::table('teacher_tbl')->insert($data);
    	Session::put('exception','techer added successfully!!');
    	return Redirect::to('/addteacher');
    }
    public function teacherdelete($teacher_id){
    	DB::table('teacher_tbl')
    	->where('teacher_id',$teacher_id)
    	->delete();
        Session::put('exception','Teacher Delete successfully');
    	return Redirect::to('/allteacher');
    }
    	
}
