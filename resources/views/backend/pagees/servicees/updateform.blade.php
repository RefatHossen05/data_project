@extends('backend.master')
@section('title','Doctor Create Form')
@section('content')

<div class="mx-auto my-2">
<a href="{{ url('servicees')}}" class="btn btn-outline-primary">Doctor list</a>
</div>

<h1 class="text-center bg-success text-white p-2">Add Infromation</h1>
<br> 
 
<div class="container mx-auto">

    <form action="{{ route('update',$doctorlists->id)}}" method="post" >
    @method('PUT')
    @csrf
        <div class="form-group my-2">
         <label for="doctorname" class="mb-1">Doctor Name :</label>
         <input type="text" name="doctorname" class="form-control" placeholder="Enter Your Name" id="doctorname" value="{{ $doctorlists->doctorname}}">
         @error('doctorname')
         <strong class="text-danger">{{$message}}</strong>
         @enderror
        </div>

        <div class="form-group my-2">
         <label for="doctor_image" class="mb-1">Doctor Image :</label>
         <input type="file" name="doctor_image" class="form-control" id="doctor_image">

         <img src="{{url('/uploads/doctor/'.$doctorlists->doctor_image)}}" alt="image not found" height="70px" width="70px" class="rounded-circle">
         
        </div>


        <div class="form-group my-2">
         <label for="dpt"  class="mb-1">Department :</label>
         <input type="text" name="dpt" class="form-control" placeholder="(Medicine Expart)" id="dpt" value="{{ $doctorlists->dpt}}">
         @error('dpt')
         <strong class="text-danger">{{$message}}</strong>
         @enderror
        </div>
        <div class="form-group my-2">
         <label for="degree" class="mb-1">Degree :</label>
         <input type="text" name="degree" class="form-control" placeholder="MBBS(FCS)" id="degree"  value="{{ $doctorlists->degree}}">
         @error('degree')
         <strong class="text-danger">{{$message}}</strong>
         @enderror
        </div>
        <div class="form-group my-2">
         <label for="time" class="mb-1">Time to see the patient :</label>
         <input type="text" name="time" class="form-control" placeholder="(4.00PM - 8.00PM" id="time"  value="{{ $doctorlists->time}}">
         @error('time')
         <strong class="text-danger">{{$message}}</strong>
         @enderror
        </div>

        <div class="form-group my-2">
         <label for="address" class="mb-1">Address :</label>
         <input type="text" name="address" class="form-control" placeholder="Enter Your Home Address" id="address"  value="{{ $doctorlists->address}}">
         @error('address')
         <strong class="text-danger">{{$message}}</strong>
         @enderror
        </div>

        <div class="form-group my-2">
         <label for="mobile" class="mb-1">Mobile No :</label>
         <input type="number" name="mobile" class="form-control" placeholder="+880-" id="mobile"  value="{{ $doctorlists->mobile}}">
         @error('mobile')
         <strong class="text-danger">{{$message}}</strong>
         @enderror
        </div>

        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-danger">Update</button>
        </div>

    </form>

</div>


@endsection