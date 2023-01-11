@extends('backend.master')

@section('content')


<div class="mx-auto">

<a href="{{ route ('admit.form')}}" class="btn btn-warning my-2">Add Admited patient</a>
</div> 
<div id="PrintTableArea">
<h1 class="text-center p-2 bg-info text-white border-rounded-y2"><marquee> Admited Patient Information</marquee></h1>

@if ($message = session()->get('success'))
<div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
</div>
@endif

<table class="table table-bordered">
    <thead class='text-center'>
        <tr>
            <th>Sl No</th>
            <th>Admited Date</th>
            <th>patient Name</th>
            <th>Bad No</th> 
            <th>Cabin No</th>
            <th>Ward Name</th>
            <th>Description</th> 
            <th>Action</th>
 
        </tr>

 @foreach($admitpeoples as $view)

        <tr>
            <td>{{ $view->id }}</td>
            <td>{{$view->admited_date}}</td>
            <td>{{$view->patient->patient_name}}</td>
            <td>{{$view->bed->bed_no}}</td>
            <td>{{$view->room->room_no}}</td>
            <td>{{$view->ward->ward_name}}</td>
            <td>{{$view->description}}</td>
           
     
            <td class="text-center">
            <a href="{{ route ('admitedupdate.form',$view->id)}}" class="btn btn-success">Edit</a>
            <a href="{{ route ('admit.delete',$view->id)}}" class="btn btn-danger">Delete</a></td>

        </tr>
@endforeach
           

</table>



<div  class="d-flex justify-content-center">
{{  $admitpeoples->links()}}
</div>


</div>
<a href="" class="btn btn-success" onclick="printDiv('PrintTableArea')">Print</a>



<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

@endsection