@extends('backend.master')

@section('content')

<a href="{{route('appointment.form')}}" class="btn btn-success my-2">Add appointment</a>



@if($message =session()->get('danger'))
<div class="alert alert-danger alert-block">
<strong>{{$message}}</strong>
</div>
@endif 

@if($message =session()->get('warning'))
<div class="alert alert-warning alert-block">
<strong>{{$message}}</strong>
</div>
@endif 

<h1 class="text-center my-1">Patient Appointment List</h1>

<table class="table table-bordered"> 
    <tr>
        <th>Sl No</th>
        <th>Patient Name</th>
        <th>Doctor Name</th>
        <th>Doctor Image</th>
        <th>Date of Serial</th>
        <th>Action</th>
    </tr>
@foreach($lists as $view)
    <tr> 
        <td>{{$view->id}}</td>
        <td>{{$view->patient_name}}</td>
        <td>{{$view->doctor_name}}</td>
        <td class="text-center">
            <img src="{{url('/uploads/appointment/'.$view->doctor_image)}}" alt="image not found" class="rounded-circle" height="70px" width="70px" >
        </td>
        <td>{{$view->date}}</td>
        <td>
        <a href="{{route('appointment.edit',$view->id)}}" class="btn btn-warning">Edit</a>
        <a href="{{route('appointment.delete',$view->id)}}" class="btn btn-danger">Delete</a>

        
        </td>
    </tr>

@endforeach


</table>

@endsection