@extends('layout')
@section('content')

            <!-- End Main Forms -->
          <div class="col-12 col-lg-6 grid-margin">
          	<div class="card">
          		<div class="card-body">
          			<h2 class="card-title">ADD STUDENT</h2>

          			<p class="alert-danger"><?php
          			$exception=Session::get('exception');

          			if($exception){
          				echo $exception;
          				Session::put('exception',null);
          			}
          			?></p>

          			<form class="forms-sample"method ="post" action="{{url('/savestudent')}}" enctype="multipart/form-data">
          				{{ csrf_field()}}
          				<div class="form-group" >
          					
          					<label for="exampleInputEmail">Student name</label>
          					<input type="text" class="form-control p-input" id="exampleInputEmail" name="student_name" placeholder="student name">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputEmail">Student roll</label>
          					<input type="text" class="form-control p-input" id="exampleInputEmail" name="student_roll" placeholder="student roll">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputEmail">Student_Father's name</label>
          					<input type="text" class="form-control p-input" id="exampleInputEmail" name="student_fathersname"placeholder="student fathersname">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputEmail">Student_Mother's name</label>
          					<input type="text" class="form-control p-input" id="exampleInputEmail" name="student_mothersname" placeholder="student mothersname">
          				</div>
          				
          				<div class="form-group">
          					<label for="exampleInputEmail">Student Email</label>
          					<input type="email" class="form-control p-input"  name="student_email" placeholder="student email">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputPhone">Student Phone</label>
          					<input type="text" class="form-control p-input" id="exampleInputEmail" name="student_phone" placeholder="student phone">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputAddress">Student Address</label>
          					<input type="text" class="form-control p-input" id="exampleInputAddress" name="student_address"placeholder="student address">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputEmail">Student Password</label>
          					<input type="password" class="form-control p-input" id="exampleInputEmail" name="student_password" placeholder="student password">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputEmail">Student Department</label>
          					<select class="form-control p-input" name="student_department">
          						<option value="1">CSE</option>
          						<option value="2">EEE</option>
          						<option value="3">ACCE</option>
          					</select>
          				</div>
          				<div class="form-group">
          					<label for="exampleInputEmail">Admission Year</label>
          					<input type="date" class="form-control p-input" id="exampleInputEmail" name="student_admissionyear" placeholder="student admission">
          				</div>
          				<div class="form-group">
          					<label>upload file</label>
          					<div class="row">
          						<div class="col-12">
          							<label for="exampleInputEmail" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
          							<input type="file" class="form-control-file" name="student_image" aria-describedby="fileHelp">
          							<small id="fileHelp" class="form-text text-muted">This is some placeholder.</small>
          						</div>
          					</div>
          				
          				
          				<button type="submit" class="btn btn-success">Submit</button>
          			</form>
          		</div>
          	</div>
          </div>

@endsection