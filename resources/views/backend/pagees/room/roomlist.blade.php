@extends('backend.master')


@section('content')
<div class="container">
<div class="mx-auto">
<a href="{{ route('room.form')}}" class="btn btn-outline-primary">Add list</a>
</div> 
</div>
 
<h1 class="text-center text-white bg-success my-2 py-1" >Room List</h1>



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
            <th>Room No</th>
            <th>Room Name</th>
            <th>Room Type</th>
            <th>Room Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($rooms as $key=>$room)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{ $room->room_no}}</td>
            <td>{{$room->room_name}}</td>
            <td>{{$room->room_type}}</td>
            <td>
                <img src="{{url('/uploads/room/'.$room->image)}}" alt="img not found" height="70px" width="70px">
            </td>
               
            </td>
            <td>
                <a href="{{route('room.edit',$room->id)}}" class="btn btn-info">Edit</a>

                <a class="btn btn-danger" href="{{route('room.delete',$room->id)}}" >Delete</a>
            </td>
        </tr>

        @endforeach

    </tbody>

</table>


@endsection