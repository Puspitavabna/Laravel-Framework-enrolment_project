@extends('layout')
@section('content')

   <div class="card">
   	<div class="card-body">
   		<h2 class="card-title">Student table</h2>
         <p class="alert-danger"><?php
                  $exception=Session::get('exception');

                  if($exception){
                     echo $exception;
                     Session::put('exception',null);
                  }
                  ?></p>
   		<div class="row">
   			<div class="col-12">
   				<table id="order-listing" class="table table-striped" style="width:100%";>
   				<thead>
   					<tr>
   					<th>St_Roll</th>
   					<th>St_Name</th>
   					<th>Phone</th>
   					<th>Image</th>
   					<th>Address</th>
   					<th>Department</th>
   				</tr>
   			</thead>
   			<tbody>

                  
               @foreach($all_student_info as $v_student)
   				<tr>

   					<td>{{$v_student->student_roll}}</td>
   					<td>{{$v_student->student_name}}</td>
   					<td>{{$v_student->student_phone}}</td>
                  <td><img src="{{URL::to($v_student->student_image)}}" height="80" width="100" style="border-radius: 50%;"></td>
   					<td>{{$v_student->student_address}}</td>
   					<td>{{$v_student->student_department}}
                     @if ($v_student->student_department==1)
                     <span class="label label-success">{{'CSE'}}</span>
                     @elseif ($v_student->student_department==2)
                     <span class="label label-primary">{{'EEE'}}</span>
                     @elseif ($v_student->student_department==3)
                     <span class="label label-warning">{{'ACCE'}}</span>
                     @endif
                  </td>
   				
   					<td>
   						<a href="{{url('/student_view/'.$v_student->student_id)}}"><button class="btn btn-outline-primary">Views</button></a>
   						<a href="{{url('/student_edit/'.$v_student->student_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                     
                     <a href="{{url('/student_delete/'.$v_student->student_id)}}" id="Delete"><button class="btn btn-outline-danger">Delete</button></a>
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