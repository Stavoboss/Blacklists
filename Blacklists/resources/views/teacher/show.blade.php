@extends('welcome')
@section('content')
 
 
<div class="card">
  <div class="card-header">Teachers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $teacher->name }}</h5>
        <h5 class="card-title">LastName : {{ $teacher->lastname }}</h5>
        <p class="card-text">Address : {{ $teacher->address }}</p>
        <p class="card-text">University_ID : {{ $teacher->university_id }}</p>
        <p class="card-text">Mobile : {{ $teacher->mobile }}</p>
        <p class="card-text">Status : {{ $teacher->status }}</p>
  </div>
       
    </hr>
  
  </div><a href="{{ url('/teacher') }}" class="btn btn-success btn-sm" title="Add New Teacher">
                            <i class="fa fa-plus" aria-hidden="true"></i>Back
                        </a>
</div>
@endsection