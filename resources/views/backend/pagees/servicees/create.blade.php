@extends('backend.master')

@section('content')

<h1 class="text-center bg-success text-white p-2">Add Infromation</h1>
<div class="container mx-auto">
    <form action="">
        <div class="form-group my-2">
         <label for="Doctor_Name" class="mb-1">Doctor Name :</label>
         <input type="text" class="form-control" placeholder="Enter Your Name" id="Doctor_Name">
        </div>
        <div class="form-group my-2">
         <label for="Dpt"  class="mb-1">Department :</label>
         <input type="text" class="form-control" placeholder="(Medicine Expart)" id="Dpt">
        </div>
        <div class="form-group my-2">
         <label for="Deg" class="mb-1">Degree :</label>
         <input type="text" class="form-control" placeholder="MBBS(FCS)" id="Deg">
        </div>
        <div class="form-group my-2">
         <label for="time" class="mb-1">Time to see the patient :</label>
         <input type="text" class="form-control" placeholder="(4.00PM - 8.00PM" id="time">
        </div>

        <div class="form-group my-2">
         <label for="address" class="mb-1">Address :</label>
         <input type="number" class="form-control" placeholder="Enter Your Home Address" id="address">
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