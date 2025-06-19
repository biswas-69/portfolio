<!DOCTYPE html>
<html>
<head>
    <title>Upload Photo</title>
      <style>
        .all{
            border:2px solid black;
            width:600px;
            
        }


    </style>
</head>
<body>
    <h1>Upload Photo</h1>

    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
