@extends('backend.master')

@section('content')

<h1 class="text-center text-warning">Admission Form</h1>

<a href="{{route('admission.list')}}" class="btn btn-success">Back</a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <form action="{{route('admission.update',$admissions->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-1">
                    <label for="name_of_candidate" class="mb-1">
                        <strong>Name of candidate:</strong></label>
                    <input type="text" name="name_of_candidate" id="name_of_candidate" class="form-control" placeholder="Place Enter candidate name" value="{{$admissions->name_of_candidate}}">
                </div>  

                <div class="form-group mb-1">
                    <label for="candidate_image" class="mb-1">
                        <strong>Candidate Image</strong>
                    </label>
                    <input type="file" name="candidate_image" id="candidate_image" class="form-control" >
                    <img src="{{url('/uploads/Admission/',$admissions->candidate_image)}}" alt="" height="70px" width="70px" class="rounded-circle">
                </div>

                <div class="form-group mb-1">
                    <label for="father_or_husband_name" class="mb-1">
                        <strong>Father's/Husband's Name:</strong>
                    </label>
                    <input type="text" name="father_or_husband_name" id="father_or_husband_name" class="form-control" placeholder="Place Enter Father/Husband's Name" value="{{$admissions->father_or_husband_name}}">
                </div> 
                <div class="form-group mb-1">
                    <label for="date_of_birth" class="mb-1">
                        <strong>Date Of Birth</strong>
                    </label>
                    <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" value="{{$admissions->date_of_birth}}">
                </div> 

                <div class="form-group mb-1">
                    <label for="age" class="mb-1">
                        <strong>Age</strong>
                    </label>
                    <input type="text" name="age" id="age" class="form-control" value="{{$admissions->age}}">
                </div>

                <div class="form-group mb-1">
                    <label for="gender" class="mb-1">
                        <strong>gender</strong>
                    </label>
                    <input type="text" name="gender" id="gender" class="form-control" value="{{$admissions->gender}}">
                </div>
                <div class="form-group mb-1">
                    <label for="nationality" class="mb-1">
                        <strong>Nationality</strong>
                    </label>
                    <input type="text" name="nationality" id="nationality" class="form-control" value="{{$admissions->nationality}}">
                </div>

                <div class="form-group mb-1">
                    <label for="permanent_address" class="mb-1">
                        <strong>Permanent Address</strong>
                    </label>
                    <input type="text" name="permanent_address" id="permanent_address" class="form-control" value="{{$admissions->permanent_address}}">
                </div>
                <div class="form-group mb-1">
                    <label for="present_address" class="mb-1">
                        <strong>Present Address</strong>
                    </label>
                    <input type="present_address" name="present_address" id="date" class="form-control" value="{{$admissions->present_address}}">
                </div>

                <div class="form-group mb-1">
                    <label for="email" class="mb-1">
                        <strong>E-mail Address</strong>
                    </label>
                    <input type="email" name="email" id="email" class="form-control" value="{{$admissions->email}}">
                </div>

                <div class="form-group mb-1">
                    <label for="contacet_no" class="mb-1">
                        <strong>Contact No:</strong>
                    </label>
                    <input type="text" name="contacet_no" id="contacet_no" class="form-control" value="{{$admissions->contacet_no}}">
                </div>

                <div class="form-group mb-1 text-center">
                    <button type="submit" class="btn btn-info">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection