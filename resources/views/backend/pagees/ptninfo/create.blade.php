@extends('backend.master')
@section('title,')

@section('content')

<div class="mx-auto">
<a href="{{ url('patient-info')}}" class="btn btn-outline-primary my-2">Patient List</a>
</div>

<h1 class="text-center bg-success text-white p-2">Add Paient Infromation</h1>
<div class="container mx-auto">
    <form action="{{ route('submitdata') }}" method="post" >
    @csrf
        <div class="form-group my-2">
         <label for="Doctor_Name" class="mb-1">Date & Time :</label>
         <input type="text" class="form-control" placeholder="Date" id="Doctor_Name">
        </div>
        <div class="form-group my-2">
         <label for="Dpt"  class="mb-1">Patient Name:</label>
         <input type="text" class="form-control" placeholder="Plese Enter Patient Name" id="Dpt">
        </div>
        <div class="form-group my-2">
         <label for="Deg" class="mb-1">Gender :</label>
         <input type="radio" id="male"><label for="male"> Male</label>
         <input type="radio" id="female"><label for="female"> female</label>

        </div>
        <div class="form-group my-2">
         <label for="time" class="mb-1">Age:</label>
         <input type="number" class="form-control" id="time">
        </div>

        <div class="form-group my-2">
         <label for="address" class="mb-1">Address :</label>
         <input type="text" class="form-control" placeholder="Enter Your Home Address" id="address">
        </div>

        <div class="form-group my-2">
         <label for="phone" class="mb-1">Mobile No :</label>
         <input type="number" class="form-control" placeholder="+880-" id="phone">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>

    </form>

</div>


@endsection