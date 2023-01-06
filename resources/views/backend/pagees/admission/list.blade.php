@extends('backend.master')

@section('content')

<a href="{{route('admission.form')}}" class="btn btn-success my-2">Admission Form</a>

<!-- @if($message =session()->get('success'))
<div class="alert alert-success alert-block">
<strong>{{$message}}</strong>
</div>
@endif  -->


@if($message =session()->get('danger'))
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

@foreach($admissions as $admissionview)
    <tr>
        <td>{{$admissionview->id}}</td>
        <td>{{$admissionview->name_of_candidate}}</td>
        <td>
            <img src="{{url('/uploads/Admission/',$admissionview->candidate_image)}}" alt="" height="70px" width="70px" class="rounded-circle">
        </td>
        <td>{{$admissionview->father_or_husband_name}}</td>
        <td>{{$admissionview->date_of_birth}}</td>
        <td>{{$admissionview->age}}</td>
        <td>{{$admissionview->gender}}</td>
        <td>{{$admissionview->nationality}}</td>
        <td>{{$admissionview->permanent_address}}</td>
        <td>{{$admissionview->present_address}}</td>
        <td>{{$admissionview->email}}</td>
        <td>{{$admissionview->contacet_no}}</td>
        <td>
            <a href="{{route('admission.edit',$admissionview->id)}}" class="btn btn-warning">Edit</a>
            <a href="{{route('admission.delete',$admissionview->id)}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach



</table>

@endsection