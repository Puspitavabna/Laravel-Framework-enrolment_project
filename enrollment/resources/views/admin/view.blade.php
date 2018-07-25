@extends('layout')
@section('content')

<div class="row user-profile">
	<div class="col-lg-12 side-left">
		<div class="card mb-6">
			<div class="card-body avator">
				<h2 class="card-title">Info</h2>
				<!-- <img src="{{URL::to($student_description_profile->student_image)}}" alt=""> -->
				<p class="name">{{$student_description_profile->student_name}} </p>
				<p class="designation">{{$student_description_profile->student_department}} </p>
				<p class="email" href="#">{{$student_description_profile->student_email}}</p>
				<p class="number" href="#">{{$student_description_profile->student_phone}}</p>
			</div>
		</div>
		<div class="card mb-4">
			<div class="card-body overview">
				<!-- <u1 class="achivements">
				<li><p>34</p><p>projects</p></li>
				<li><p>34</p><p>Task</p></li>
				<li><p>34</p><p>Completed</p></li>

			</u1> -->
			<div class="wrapper about-user">
				<h2 class="card-title mt-4 ,mb-3">About</h2>
				<p>The total information of the system is given below</p>
			</div>
			<div class="info-links">
				<a class-"website"  >
					<i class="icon-global icon"><b>Father Name</b></i>
					<span style="font-family:verdana; font-size:15px;">{{$student_description_profile->student_fathersname}}</span><br>
				</a>
			     <a class-"website" >
					<i class="icon-global icon"><b>Mother Name</b></i>
					<span style="font-family:verdana; font-size:15px;">{{$student_description_profile->student_mothersname}}</span><br>
				</a>
				<a class-"website" >
					<i class="social-link"><b>Roll number</b></i>
					<span style="font-family:verdana; font-size:15px;">{{$student_description_profile->student_roll}}</span><br>
				</a>
				<a class-"website" >
					<i class="icon-global icon"><b>Student Address</b></i>
					<span style="font-family:verdana; font-size:15px;">{{$student_description_profile->student_address}}</span><br>
				</a>
				<a class-"website" >
					<i class="icon-global icon"><b>Email </b></i>
					<span style="font-family:verdana; font-size:15px;">{{$student_description_profile->student_email}}</span><br>
				</a>

				
				

			        
				
			</div>

			</div>
		</div>
	</div>
</div>

@endsection