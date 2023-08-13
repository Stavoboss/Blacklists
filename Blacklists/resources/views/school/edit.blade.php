@extends('welcome')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('school/' .$school->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$school->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$school->name}}" class="form-control"></br>
       
        
        
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$school->address}}" class="form-control"></br>
        <label>University_ID</label></br>
        <input type="text" name="university_id" id="lastname" value="{{$school->university_id}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop