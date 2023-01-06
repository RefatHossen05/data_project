@extends('backend.master')


@section('content')
<div class="container">
<div class="mx-auto">
<a href="{{ route('bed.form')}}" class="btn btn-outline-primary">Add list</a>
</div> 
</div>
 
<h1 class="text-center text-white bg-success my-2 py-1" >Bed List</h1>



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
            <th>Bed No</th>
            <th>Bed Name</th>
            <th>Bed Type</th>
            <th>Bed Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($beds as $key=>$bed)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{ $bed->bed_no}}</td>
            <td>{{$bed->bed_name}}</td>
            <td>{{$bed->bed_type}}</td>
            <td>
                <img src="{{url('/uploads/bed/'.$bed->image)}}" alt="img not found" height="70px" width="70px">
            </td>
               
            </td>
            <td>
                <a href="{{route('bed.edit',$bed->id)}}" class="btn btn-info">Edit</a>

                <a class="btn btn-danger" href="{{route('bed.delete',$bed->id)}}" >Delete</a>
            </td>
        </tr>

        @endforeach

    </tbody>

</table>

{{$beds->links()}}


@endsection