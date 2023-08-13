<!-- resources/views/upload_form.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>CSV Upload</title>
</head>
<body>

<h2>Upload CSV File</h2>
<form action="/upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="csv_file">
    <button type="submit">Upload</button>
</form>

</body>
</html>
