@extends('backend.master')
@section('title','Doctor list view')

@section('content')
<div class="container">
<div class="mx-auto">
<a href="{{ route('service.form')}}" class="btn btn-outline-primary">Add Doctor</a>
</div>
</div>

<h1 class="text-center text-info" >Doctor Information</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Doctor Name </th>
            <th>Department</th>
            <th>Degree</th>
            <th>Time to see the patient </th>
            <th>Address</th>
            <th>Mobile No </th>
        </tr>

        @foreach($doctors as $doctor_view)

        <tr>
            <td>{{$doctor_view->doctorname}}</td>
            <td>{{$doctor_view->dpt}}</td>
            <td>{{$doctor_view->degree}}</td>
            <td>{{$doctor_view->time}}</td>
            <td>{{$doctor_view->address}}</td>
            <td>{{$doctor_view->mobile}}</td>
        </tr>
        @endforeach

    </thead>
    <tbody>

    </tbody>

</table>


@endsection