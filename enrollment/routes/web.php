<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//logout
Route::get('/logout','AdminController@logout');



Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});

//admin login...
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');
Route::get('/viewprofile','AdminController@viewprofile');
Route::get('/setting','AdminController@setting');

//addstudent

Route::get('/addstudent','AddstudentController@addstudent');
Route::post('/savestudent','AddstudentController@savestudent');
Route::get('/student_delete/{student_id}','AllstudentController@studentdelete');
Route::get('/student_view/{student_id}','AllstudentController@studentview');
Route::get('/student_edit/{student_id}','AllstudentController@studentedit');
Route::post('/update_student/{student_id}','AllstudentController@studentupdate');


Route::get('/allstudent','AllstudentController@allstudent');
Route::get('/tutionfee','TutionController@tution');
Route::get('/cse','CSEController@cse');
Route::get('/eee','EEEController@eee');
Route::get('/acce','ACCEController@acce');
Route::get('/allteacher','TeacherController@allteacher');
Route::get('/addteacher','TeacherController@addteacher');
Route::post('/saveteacher','TeacherController@saveteacher');
Route::get('/teacher_delete/{teacher_id}','TeacherController@teacherdelete');