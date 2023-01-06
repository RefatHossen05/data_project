@extends('backend.master')

@section('content')

<h1 class="text-center text-warning">Edit Appointment Form</h1>

<a href="{{url('appointmentlist')}}" class="btn btn-success">Back</a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="{{route('appointment.update',$lists->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-1">
                    <label for="patient_name" class="mb-1">
                        <strong> Patient Name</strong></label>
                    <input type="text" name="patient_name" id="patient_name" class="form-control" placeholder="Place Enter Your name" value="{{$lists->patient_name}}">
                </div>  

                <div class="form-group mb-1">
                    <label for="Doctor_name" class="mb-1">
                        <strong>Doctor Name</strong>
                    </label>
                    <input type="text" name="doctor_name" id="Doctor_name" class="form-control" placeholder="Place Enter Doctor Name" value="{{$lists->doctor_name}}">
                </div> 
                <div class="form-group mb-1">
                    <label for="doctor_image" class="mb-1">
                        <strong>Doctor Image</strong>
                    </label>
                    <input type="file" name="doctor_image" id="doctor_image" class="form-control" >
                    <img src="{{url('/uploads/appointment/'.$lists->doctor_image)}}" alt="image not found" class="rounded-circle" height="70px" width="70px" >
                </div> 

                <div class="form-group mb-1">
                    <label for="date" class="mb-1">
                        <strong>Date of Serial</strong>
                    </label>
                    <input type="text" name="date" id="date" class="form-control" value="{{$lists->date}}" >
                </div>

                <div class="form-group mb-1 text-center">
                    <button type="submit" class="btn btn-info">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection