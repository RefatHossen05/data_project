@extends('backend.master')
@section('content')
<div class="mx-auto">
<a href="{{ route('list')}}" class="btn btn-outline-primary">Add patient</a>
</div>

<h1 class="text-center bg-success my-3 py-1 text-white">Patient List</h1>
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
            <th>Doctor Name</th>  
            <th>Department</th>       
            <th>Gender</th>
            <th>Age</th>
            <th>Address</th>
            <th>Mobile No</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($informations as $key=>$patientview)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $patientview->patient_name }}</td>  
            <td>{{ $patientview->doctors->doctorname}}</td>        
            <td>{{ $patientview->doctors->dpt}}</td>        
            <td>{{ $patientview->gender }}</td>
            <td>{{ $patientview->age}}</td>
            <td>{{ $patientview->address}}</td>
            <td>{{ $patientview->mobile_no}}</td>
            <td>
            <a href="{{ route('updateform',$patientview->id)}}" class="btn btn-warning">Update</a>
            <a href="{{route('delete',$patientview->id)}}" class="btn btn-danger">Delete</a>
           

            </td>
        </tr>
    @endforeach
    </tbody>


</table>


<div  class="d-flex justify-content-center">
{{ $informations->links()}}
</div>
@endsection