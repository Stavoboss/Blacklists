<!DOCTYPE html>
<html>
<head>
    <title>Teacher Live Search</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <br />
    <div class="container box">
        <h3 align="center">Teacher Live Search</h3><br />

        <div class="panel panel-default">
            @if (Session::has('success'))
            <p style="color: green;">{{ Session::get('success') }}</p>
            @endif

            @if (Session::has('error'))
            <p style="color: red;">{{ Session::get('error') }}</p>
            @endif

            <div class="form-group" style="display: flex; align-items: center;">
    <h2 style="margin-right: 20px;">Upload CSV File</h2>
    <form action="/upload" method="post" enctype="multipart/form-data" style="display: flex; align-items: center;">
        @csrf
        <input type="file" name="csv_file" style="margin-right: 10px;">
        <button type="submit">Upload</button>
    </form>
</div>

            <div class="panel-heading">Search Teachers Data</div>
            <div class="panel-body">
                <div class="form-group">
                    <input type="text" name="search" id="searchInput" class="form-control" placeholder="Enter Name Here!!!!!!" />
                </div>

                <div class="table-responsive">
                    <h3 align="center">Teachers : <span id="total_records"></span></h3>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                
                                <th>Name</th>
                                <th>LastName</th>
                                <th>Address</th>
                                <th>University_ID</th>
                                <th>Mobile</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="alldata">
                            @foreach($teacher as $item)
                            <tr>
                                
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->lastname }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->university_id }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>{{ $item->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tbody id="Content" class="searchdata"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="search-results"></div>

    <script type="text/javascript">
        $('#searchInput').on('keyup', function() {
            var $value = $(this).val();

            if ($value) {
                $('.alldata').hide();
                $('.searchdata').show();
            } else {
                $('.alldata').show();
                $('.searchdata').hide();
            }

            $.ajax({
                type: 'get',
                url: '{{ route('search') }}',
                data: { 'search': $value },

                success: function(data) {
                    console.log(data);
                    $('#Content').html(data);
                }
            });
        });
    </script>
</body>
</html>
