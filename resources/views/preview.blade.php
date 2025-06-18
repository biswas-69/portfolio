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
    

    <img src="{{ asset('storage/' . $photo->file_path) }}" alt="Uploaded Photo" width="300"><br><br>
    
</body>
</html>
