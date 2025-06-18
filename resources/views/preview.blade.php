<!DOCTYPE html>
<html>
<head>
    <title>Photo Preview</title>
      <style>
        .all{
            border:2px solid black;
            width:600px;
        }


    </style>
</head>
<body>
    <h1>Photo Uploaded Successfully!</h1>

    <img src="{{ asset('storage/' . $photo->file_path) }}" alt="Uploaded Photo" width="300"><br><br>
    <p><strong>File Name:</strong> {{ $photo->name }}</p>

    <a href="{{ route('photos.download', $photo->id) }}">Download This Photo</a><br><br>
    <a href="{{ route('photos.upload') }}">Upload Another Photo</a>
</body>
</html>
