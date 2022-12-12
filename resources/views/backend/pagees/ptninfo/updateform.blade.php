@extends('backend.master')
@section('title,')

@section('content')

 
<h1 class="text-center bg-success text-white p-2">Add Patient Infromation</h1>
<div class="container mx-auto">
    <form action="{{ route('patient.update',$patientinfo->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

        <div class="form-group my-2">
         <label for="patient_name"  class="mb-1">Patient Name:</label>
         <input type="text" class="form-control" name="patient_name" placeholder="Plese Enter Patient Name" id="patient_name" value="{{ $patientinfo->patient_name}}">
        </div>
        <div class="form-group my-2">
         <label for="gender"  class="mb-1">Gender</label>
         <input type="text" class="form-control" name="gender" placeholder="Male/Female" id="gender" value="{{$patientinfo->gender}}">
        </div>
        


        <div class="form-group my-2">
         <label for="age" class="mb-1">Age:</label>
         <input type="number" class="form-control" name="age" id="age"  value="{{$patientinfo->age}}">
        </div>

        <div class="form-group my-2">
         <label for="address" class="mb-1">Address :</label>
         <input type="text" class="form-control" name="address" placeholder="Enter Your Home Address" id="address"  value="{{$patientinfo->address}}">
        </div>

        <div class="form-group my-2">
         <label for="mobile_no" class="mb-1">Mobile No :</label>
         <input type="number" class="form-control" name="mobile_no" placeholder="+880-" id="mobile_no"  value="{{$patientinfo->mobile_no}}">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>

    </form>

</div>


@endsection