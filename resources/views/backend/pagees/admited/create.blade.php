@extends('backend.master')

@section('content')


<div class="mx-auto">
<a href="{{ route ('admit.form')}}" class="btn btn-outline-warning my-2">Add Admited patient</a>
</div> 

<h1 class="text-center p-4 bg-info text-white border-rounded-y2"><marquee> Admited Patient Information</marquee></h1>

@if ($message = session()->get('success'))
<div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div>
@endif

<table class="table table-bordered">
    <thead class='text-center'>
        <tr>
            <th>Sl No</th>
            <th>patient Name</th>
            <th>patient Image</th>
            <th>Bad No</th>
            <th>Cabin No</th>
            <th>Description</th> 
            <th>Action</th>

        </tr>

 @foreach($admitpeoples as $view)

        <tr>
            <td>{{ $view->id }}</td>
            <td>{{ $view->patient_name}}</td>
            <td>
            <img src="{{asset('/uploads/admitedpatient/'.$view->patient_image)}}" alt="image not found" height="70px" width="70px" class="rounded-circle">


            </td>
            <td>{{ $view->bad_no }}</td>
            <td>{{ $view->cabin_no }}</td>
            <td>{{ $view->description }}</td>
     
            <td class="text-center">
            <a href="{{ route ('admitedupdate.form',$view->id)}}" class="btn btn-success">Edit</a>
            <a href="{{ route ('admit.delete',$view->id)}}" class="btn btn-danger">Delete</a></td>

        </tr>
@endforeach
           

</table>

@endsection