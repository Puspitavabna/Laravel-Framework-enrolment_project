@extends('layout')
@section('content')

   <div class="card">
   	<div class="card-body">
   		<h2 class="card-title">All Teacher</h2>
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
   					<th>Th_id</th>
   					<th>Th_Name</th>
   					
   					<th>Phone</th>
   					<th>email</th>
   					
   					<th>Department</th>
   				</tr>
   			</thead>
   			<tbody>

                  
               @foreach($all_teacher_info as $v_teacher)
   				<tr>

   					<td>{{$v_teacher->teacher_id}}</td>
   					<td>{{$v_teacher->teacher_name}}</td>
   					<td>{{$v_teacher->teacher_phone}}</td>
                  
   					<td>{{$v_teacher->teacher_email}}</td>
   					<td>{{$v_teacher->teacher_department}}
                     @if ($v_teacher->teacher_department==1)
                     <span class="label label-success">{{'CSE'}}</span>
                     @elseif ($v_teacher->teacher_department==2)
                     <span class="label label-primary">{{'EEE'}}</span>
                     @elseif ($v_teacher->teacher_department==3)
                     <span class="label label-warning">{{'ACCE'}}</span>
                     @endif
                  </td>
   				
   					<td>
   						<!-- <button class="btn btn-outline-primary">Views</button></a>
   						<button class="btn btn-outline-warning">Edit</button></a> -->
                     
                     <a href="{{url('/teacher_delete/'.$v_teacher->teacher_id)}}" id="Delete"><button class="btn btn-outline-danger">Delete</button></a>
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
   					