@extends('backend.master')


@section('content')
<div class="container">
<div class="mx-auto">
<a href="{{ route('ward.form')}}" class="btn btn-outline-primary">Add list</a>
</div> 
</div>
 
<h1 class="text-center text-white bg-success my-2 py-1" >Ward List</h1>



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
            <th>Ward Name</th>
            <th>Ward Image</th>
            <th>Ward Type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $key=>$ward)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$ward->ward_name}}</td>
            <td>
            <img src="{{url('/uploads/ward/'.$ward->image)}}" height="70px" width="70px" alt="img not found">
            </td>
            <td>{{$ward->ward_type}}</td>
            <td>
                <a href="{{route('ward.edit',$ward->id)}}" class="btn btn-info">Edit</a>
                <a href="{{route('ward.delete',$ward->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>

        @endforeach

    </tbody>

</table>


   {{$data->links()}}


@endsection