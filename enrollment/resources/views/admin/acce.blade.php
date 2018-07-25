@extends('layout')
@section('content')

   <div class="card">
   	<div class="card-body">
   		<h2 class="card-title">Student table</h2>
   		<div class="row">
   			<div class="col-12">
   				<table id="order-listing" class="table table-striped" style="width:100%";>
   				<thead>
   					<tr>
   					<th>St_Roll</th>
   					<th>St_Name</th>
   					<th>Phone</th>
   					<th>Image</th>
   					<th>Department</th>
   					<th>Action</th>
   				</tr>
   			</thead>
   			<tbody>
                @foreach($acce_student_info as $v_student) 
   				<tr>

   					<td>{{$v_student->student_roll}}</td>
   					<td>{{$v_student->student_name}}</td>
   					<td>{{$v_student->student_phone}}</td>
                  <td><img src="{{URL::to($v_student->student_image)}}" height="80" width="100" style="border-radius: 50%;"></td>
   					<!-- <td>{{$v_student->student_address}}</td> -->
   					<td>
                     @if ($v_student->student_department=="CSE")
                     <span class="label label-success">{{'CSE'}}</span>
                     @elseif ($v_student->student_department=="EEE")
                     <span class="label label-primary">{{'EEE'}}</span>
                     @elseif ($v_student->student_department=="ACCE")
                     <span class="label label-warning">{{'ACCE'}}</span>
                     @endif
                  </td>
   				
   					<td>
   						<button class="btn btn-outline-primary">Views</button>
   						<button class="btn btn-outline-warning">Edit</button>
                     <button class="btn btn-outline-danger">Delete</button>
   				    </td>
   				</tr>
   				@endforeach
   			</tbody>
   		</table>
   	</div>
   </div>
</div>
</div>

@endsection