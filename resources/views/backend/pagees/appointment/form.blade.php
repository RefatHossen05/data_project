@extends('backend.master')

@section('content')

<h1 class="text-center text-warning">Appointment Form</h1>

<a href="{{url('appointmentlist')}}" class="btn btn-success">Back</a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="{{route('appointment.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-1">
                    <label for="patient_name" class="mb-1">
                        <strong> Patient Name</strong></label>
                    <input type="text" name="patient_name" id="patient_name" class="form-control" placeholder="Place Enter Your name">
                </div>  

                <div class="form-group mb-1">
                    <label for="Doctor_name" class="mb-1">
                        <strong>Doctor Name</strong>
                    </label>
                    <input type="text" name="doctor_name" id="Doctor_name" class="form-control" placeholder="Place Enter Doctor Name">
                </div> 
                <div class="form-group mb-1">
                    <label for="doctor_image" class="mb-1">
                        <strong>Doctor Image</strong>
                    </label>
                    <input type="file" name="doctor_image" id="doctor_image" class="form-control" >
                </div> 

                <div class="form-group mb-1">
                    <label for="date" class="mb-1">
                        <strong>Date of Serial</strong>
                    </label>
                    <input type="text" name="date" id="date" class="form-control" >
                </div>

                <div class="form-group mb-1 text-center">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection