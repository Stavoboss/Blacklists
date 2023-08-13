@extends('layout')
@section('content')
<div class="card-body">
                        <a href="{{ url('/teacher/create') }}" class="btn btn-success btn-sm" title="Add New Teacher">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

<table class="table table-striped">
  <thead>
  <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>LastName</th>
                                        <th>Address</th>
                                        <th>University_ID</th>
                                        <th>Mobile</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($teacher as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->lastname }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->university_id }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                        <a href="{{ url('/teacher/' . $item->id . '/edit') }}" title="Blacklist Teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Blacklist</button></a>
</td>
<td>  
                                        
                                            <a href="{{ url('/teacher/' . $item->id) }}" title="View Teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/teacher/' . $item->id . '/edit') }}" title="Edit Teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/teacher' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection