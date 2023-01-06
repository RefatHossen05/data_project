@extends('backend.master')

@section('content')

<div class="mx-auto">
<a href="{{ url('admitedcreate')}}" class="btn btn-outline-primary my-2">Show Admited patient</a>
</div> 
 <div class="container mx-auto"> 
 <div class="row justify-content-center ">
    <div class="col-lg-6">
<h1 class="text-center bg-success text-white p-2">Patient Admited Form</h1>





    <form action="{{ route('admit.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group my-2">
         <label for="admited_date" class="mb-1">Admited Date</label>
         <input type="text" name="admited_date" class="form-control" id="admited_date">
        </div>
   
        <div class="form-group my-2">
        <label for="patient"  class="mb-1 ">Patient information:</label>
            <select name="patient_id" id="patient" class="form-control">
            @foreach($patients as $patient)
            <option value="{{$patient->id}}">{{$patient->patient_name}}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group my-2">
        <label for="bed"  class="mb-1">Bad No:</label>
            <select name="bed_id" id="bed" class="form-control">
            @foreach($beds as $bed)
            <option value="{{$bed->id}}">{{$bed->bed_no}}</option>
            @endforeach
            </select>
        </div>
 

        <div class="form-group my-2">
        <label for="Room"  class="mb-1">Room No:</label>
            <select name="room_id" id="Room" class="form-control">
            @foreach($rooms as $room)
            <option value="{{$room->id}}">{{$room->room_no}}</option>
            @endforeach
            </select>
        </div>



        <div class="form-group my-2">
        <label for="ward"  class="mb-1">Ward No:</label>
            <select name="ward_id" id="ward" class="form-control">
            @foreach($wards as $ward)
            <option value="{{$ward->id}}">{{$ward->ward_name}}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group my-2">
         <label for="description" class="mb-1">Description</label>
         <input type="text" name="description" class="form-control" id="description">
        </div>



       
 

        <div class="text-center">
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>

    </form>

</div>
</div>
</div>

@endsection