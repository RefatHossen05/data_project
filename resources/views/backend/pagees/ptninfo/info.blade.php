@extends('backend.master')
@section('content')
<div class="mx-auto">
<a href="{{ route('list')}}" class="btn btn-outline-primary">Add patient</a>
</div>

<h1 class="text-center bg-success my-3 py-1 text-white">Patient Information</h1>
@if($message = session()->get('success'))
<div class="alert alert-success alert-block">
<strong>{{$message}}</strong>
</div> 
@endif
<table class="table table-bordered table-light text-center table-striped">
    <thead>
        <tr>
            <th>Sl No</th>
            <th>Patient Name</th>
            <th>Patient Image</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Address</th>
            <th>Mobile No</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($informations as $patientview)
        <tr>
            <td>{{ $patientview->id }}</td>
            <td>{{ $patientview->patient_name }}</td>
            <td>
            <img src="{{url('/uploads/patient/'.$patientview->patient_image)}}" alt="image not found" height="70px" width="70px" class="rounded-circle">
            </td>
            <td>{{ $patientview->gender }}</td>
            <td>{{ $patientview->age}}</td>
            <td>{{ $patientview->address}}</td>
            <td>{{ $patientview->mobile_no}}</td>
            <td>
            <a href="{{route('delete',$patientview->id)}}" class="btn btn-danger">Delete</a>
            <a href="{{ route('updateform',$patientview->id)}}" class="btn btn-warning">Update</a>

            </td>
        </tr>
    @endforeach
    </tbody>


</table>

@endsection