@extends('backend.master')

@section('content')

<div class="mx-auto">
<a href="{{ route('add.form')}}" class="btn btn-outline-success">Report add</a>
</div>

<h1 class="text-center">Patient Report</h1>


@if($message = session()->get('success'))
<div class="alert alert-success alert-block">
<strong>{{$message}}</strong>
</div>
@endif

@if($message = session()->get('danger'))
<div class="alert alert-danger alert-block">
<strong>{{$message}}</strong>
</div>
@endif

 @if ($message = session()->get('warning'))
<div class="alert alert-warning alert-block">
    <strong>{{ $message }}</strong>
</div>
@endif 


<table class="table table-bordered table-light text-center table-striped">
    <thead>
        <tr>
            <th>Sl No</th>
            <th>Patient Name</th>
            <th>Test Name</th>
            <th>Result</th>
            <th>Action</th>
          
        </tr>
    </thead>
    <tbody>
    @foreach($reports as $reports_view)
        <tr>
            <td>{{ $reports_view->id }}</td>
            <td>{{$reports_view->patient_name}}</td>
            <td>{{ $reports_view->test_name }}</td>
            <td>{{ $reports_view->result }}</td>
            <td>
            <a href="{{ route('report.updateform',$reports_view->id )}}" class="btn btn-warning">Update</a>
            <a href="{{ route('table.delete',$reports_view->id) }}" class="btn btn-danger">Delete</a>
            </td>
        
         
        </tr>
    @endforeach
    </tbody>


</table>


@endsection