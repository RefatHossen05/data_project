@extends('backend.master')
@section('content')
<div class="mx-auto">
<a href="{{ route('list')}}" class="btn btn-outline-warning">Add patient</a>
</div>

<h1>Patient Information</h1>
<table class="table table-bordered table-light text-center table-striped">
    <thead>
        <tr>
            <th>Date & Time </th>
            <th>Patient Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Address</th>
            <th>Mobile No</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>


</table>

@endsection