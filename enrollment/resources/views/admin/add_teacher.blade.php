@extends('layout')
@section('content')

            <!-- End Main Forms -->
          <div class="col-12 col-lg-6 grid-margin">
          	<div class="card">
          		<div class="card-body">
          			<h2 class="card-title">ADD Teacher</h2>

          			<p class="alert-danger"><?php
          			$exception=Session::get('exception');

          			if($exception){
          				echo $exception;
          				Session::put('exception',null);
          			}
          			?></p>

          			<form class="forms-sample"method ="post" action="{{url('/saveteacher')}}" enctype="multipart/form-data">
          				{{ csrf_field()}}
          				<div class="form-group" >
          					
          					<label for="exampleInputEmail">Teacher name</label>
          					<input type="text" class="form-control p-input" id="exampleInputEmail" name="teacher_name" placeholder="teacher name">
          				</div>
          				
          				
          				
          				<div class="form-group">
          					<label for="exampleInputEmail">Teacher Email</label>
          					<input type="email" class="form-control p-input"  name="teacher_email" placeholder="teacher email">
          				</div>
          				<div class="form-group">
          					<label for="exampleInputPhone">Teacher Phone</label>
          					<input type="text" class="form-control p-input" id="exampleInputEmail" name="teacher_phone" placeholder="teacher phone">
          				</div>
          				
          				<div class="form-group">
          					<label for="exampleInputEmail">Teacher Password</label>
          					<input type="password" class="form-control p-input" id="exampleInputPassword" name="teacher_password"placeholder="teacher password" >
          				</div>
          				<div class="form-group">Teacher Department</label>
          					<select class="form-control p-input" name="teacher_department">
          						<option >CSE</option>
          						<option >EEE</option>
          						<option >ACCE</option>
          					</select>
          				</div>
          				
          				
          				
          				<button type="submit" class="btn btn-success">Submit</button>
          			</form>
          		</div>
          	</div>
          </div>

@endsection