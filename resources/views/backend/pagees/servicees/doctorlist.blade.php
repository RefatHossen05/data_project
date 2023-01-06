@extends('backend.master')
@section('title','Doctor list view')

@section('content')
<div class="container">
<div class="mx-auto">
<a href="{{ route('service.form')}}" class="btn btn-outline-primary">Add Doctor</a>
</div> 
</div>
 
<h1 class="text-center text-white bg-success my-2 py-1" >Doctor List</h1>



@if($message = session()->get('danger'))
<div class="alert alert-danger alert-block">
<strong>{{$message}}</strong>
</div>
@endif
@if($message =session()->get('warning'))
<div class="alert alert-warning alert-block">
<strong>{{$message}}</strong>
</div>
@endif
<table class="table table-bordered">
    <thead class="text-center">
        <tr>
            <th>Sl No</th>
            <th>Doctor Name </th>
            <th>Doctor Image</th>
            <th>Department</th>
            <th>Degree</th>
            <th>Time to see the patient </th>
            <th>Address</th>
            <th>Mobile No </th>
            <th>Update</th>
            <th>Action</th>
            
        </tr>

        @foreach($doctors as $key=>$doctor_view)

        <tr>
            <td>{{$key+1}}</td>
            <td>{{$doctor_view->doctorname}}</td>
            <td>
            <img src="{{url('/uploads/doctor/'.$doctor_view->doctor_image)}}" alt="image not found" height="70px" width="70px" class="rounded-circle">
            </td>
            <td>{{$doctor_view->dpt}}</td>
            <td>{{$doctor_view->degree}}</td>
            <td>{{$doctor_view->time}}</td>
            <td>{{$doctor_view->address}}</td>
            <td>{{$doctor_view->mobile}}</td>
            <td><a href="{{ route('doctorlist.updateform',$doctor_view->id)}}" class="btn btn-warning">Edit</a></td>
            <td><a href="{{ route ('doctordate.delete',$doctor_view->id)}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach

    </thead>
    <tbody>

    </tbody>

</table>


@endsection