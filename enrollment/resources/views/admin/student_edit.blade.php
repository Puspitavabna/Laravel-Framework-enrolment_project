@extends('layout')
@section('content')

            <!-- End Main Forms -->
          <div class="col-12 col-lg-6 grid-margin">
          	<div class="card">
          		<div class="card-body">
          			<h2 class="card-title">Edit Student Info</h2>

          			 <p class="alert-danger"><?php
          			$exception=Session::get('exception');

          			if($exception){
          				echo $exception;
          				Session::put('exception',null);
          			}
          			?></p> 

          			<form class="forms-sample"method ="post" action="{{url('/update_student/'.$student_description_profile->student_id)}}">
          				{{ csrf_field()}}
          				<div class="form-group" >
          					
          					<label for="exampleInputEmail">Student name</label>
          					<input type="text" class="form-control p-input" id="exampleInputEmail" name="student_name" value="{{($student_description_profile->student_name)}}">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputEmail">Student roll</label>
          					<input type="text" class="form-control p-input" id="exampleInputEmail" name="student_roll" value="{{($student_description_profile->student_roll)}}">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputEmail">Student_Father's name</label>
          					<input type="text" class="form-control p-input" id="exampleInputEmail" name="student_fathersname"value="{{($student_description_profile->student_fathersname)}}">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputEmail">Student_Mother's name</label>
          					<input type="text" class="form-control p-input" id="exampleInputEmail" name="student_mothersname" value="{{($student_description_profile->student_mothersname)}}">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputEmail">Student Address</label>
          					<input type="text" class="form-control p-input" id="exampleInputEmail" name="student_address"value="{{($student_description_profile->student_address)}}">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputEmail">Student Phone</label>
          					<input type="text" class="form-control p-input" id="exampleInputEmail" name="student_phone" value="{{($student_description_profile->student_phone)}}">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputAddress">Student Email</label>
          					<input type="email" class="form-control p-input"  name="student_email" value="{{($student_description_profile->student_email)}}">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputEmail">Student Password</label>
          					<input type="password" class="form-control p-input" id="exampleInputEmail" name="student_password" value="{{($student_description_profile->student_password)}}">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputEmail">Admission Year</label>
          					<input type="date" class="form-control p-input" id="exampleInputEmail" name="student_admissionyear" value="{{($student_description_profile->student_admissionyear)}}">
          				</div>
          			           
          					
          				<div class="form-group">
          					<label for="exampleInputEmail">Student Department</label>
          					<select class="form-control p-input" name="student_department">
          						<option>CSE</option>
          						<option>EEE</option>
          						<option>ACCE</option>
          					</select>
          				</div>
          				
          				<button type="submit" class="btn btn-success">Update</button>
          			</form>
          		</div>
          	</div>
          </div>

@endsection