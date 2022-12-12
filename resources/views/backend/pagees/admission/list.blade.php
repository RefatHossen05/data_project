@extends('backend.master')

@section('content')

<a href="{{route('admission.form')}}" class="btn btn-success my-2">Add appointment</a>

<!-- @if($message =session()->get('success'))
<div class="alert alert-success alert-block">
<strong>{{$message}}</strong>
</div>
@endif 


@if($message =session()->get('danger'))
<div class="alert alert-danger alert-block">
<strong>{{$message}}</strong>
</div>
@endif 

@if($message =session()->get('warning'))
<div class="alert alert-warning alert-block">
<strong>{{$message}}</strong>
</div>
@endif  -->

<table class="table table-bordered"> 
    <tr>
        <th>Sl No</th>
        <th>Name of candidate</th>
        <th>Candidate Image</th>
        <th>Father's/Husband's Name</th>
        <th>Date Of Birth</th>
        <th>Age</th>
        <th>gender</th>
        <th>Nationality</th>
        <th>Permanent Address</th>
        <th>Present Address</th>
        <th>E-mail Address</th>
        <th>Contact No</th>
        <th>Action</th>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>



</table>

@endsection