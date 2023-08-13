@extends('welcome')
@section('content')
 
<div class="card">
  <div class="card-header">School Page</div>
  <div class="card-body">
      
      <form action="{{ url('school') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>University_id</label></br>
        <input type="text" name="university_id" id="university_id" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop