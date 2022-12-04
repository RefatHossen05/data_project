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
    <thead>
        <tr>
            <th>Sl No</th>
            <th>Date</th>
            <th>Type of Test</th>
            <th>Bad & Cavin</th>
            <th>update</th>
            <th>Action</th>

        </tr>

 @foreach($admitpeoples as $view)

        <tr>
            <td>{{ $view->id }}</td>
            <td>{{ $view->bad_no }}</td>
            <td>{{ $view->cabin_no }}</td>
            <td>{{ $view->description }}</td>
            <td><a href="{{ route ('admitedupdate.form',$view->id)}}" class="btn btn-success">Edit</a></td>
            <td><a href="{{ route ('admit.delete',$view->id)}}" class="btn btn-danger">Delete</a></td>

        </tr>
@endforeach
           
    </thead>
    <tbody>

    </tbody>

</table>

@endsection