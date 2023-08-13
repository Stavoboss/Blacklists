@extends('welcome')
@section('content')
 
 
<div class="card">
  <div class="card-header">School Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $school->name }}</h5>
       
        <p class="card-text">Address : {{ $school->address }}</p>
        <p class="card-text">University_ID : {{ $school->university_id }}</p>
       
  </div>
       
    </hr>
  
  </div>
</div>
@endsection