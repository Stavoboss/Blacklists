@extends('welcome')
@section('content')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('teacher/' .$teacher->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$teacher->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$teacher->name}}" class="form-control"></br>
        <label>LastName</label></br>
        <input type="text" name="lastname" id="lastname" value="{{$teacher->name}}" class="form-control"></br>
             
        
        
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$teacher->address}}" class="form-control"></br>
        <label>University_ID</label></br>
        <input type="text" name="university_id" id="lastname" value="{{$teacher->university_id}}" class="form-control"></br>
        <label>Mobile</label></br>
        
        <input type="text" name="mobile" id="mobile" value="{{$teacher->mobile}}" class="form-control"></br>
        <select name="status" id="status" class="form-control">
        <label>Status</label></br>
<option value="Active">Active</option>
<option value="Blacklisted">Blacklisted</option></br>

<div class="card-body">
      
        <input type="submit" value="Update" class="btn btn-success"></br>
</div>
    </form>
   
  </div>
</div>
</div>
</div>
 
@stop