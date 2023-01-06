@extends('backend.master')


@section('content')
<div class="container">
<div class="mx-auto">
<a href="{{ route('diseases.form')}}" class="btn btn-outline-primary">Add list</a>
</div> 
</div>
 
<h1 class="text-center text-white bg-success my-2 py-1" >Diseases List</h1>



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
            <th>Disease Type</th>           
            <th>Doctor Name</th>
            <th>Doctor Image</th>
            <th>Department</th>
            <th>Action</th>
        </tr> 
    </thead>
    <tbody>
    @foreach($diseases as $key=>$diseases)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$diseases->diseases_type}}</td>
            <td>{{ $diseases->doctor->doctorname}}</td>
           
           
            <td>
                <img src="{{url('/uploads/doctor/'.$diseases->doctor->doctor_image)}}" alt="img not found" height="70px" width="70px">
            </td>
               

            <td>{{$diseases->doctor->dpt}}</td>
            
            <td>
                <a href="{{route('diseases.edit',$diseases->id)}}" class="btn btn-info">Edit</a>

                <a class="btn btn-danger" href="{{route('diseases.delete',$diseases->id)}}" >Delete</a>
            </td>
        </tr>

        @endforeach

    </tbody>

</table>


@endsection