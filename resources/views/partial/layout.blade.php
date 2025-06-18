<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Portfolio')</title>
</head>
<body>
    <main class="container">
        @yield('content')
    </main>

</body>
</html>

<!-- <title>Upload Photo</title>
    <style>
        .all{
            border:2px solid black;
            width:600px;
        }


    </style>
</head>
<body> 
    <div class="all">
    <h1>Upload Photo</h1>

    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo" required>
        <button type="submit">Upload</button>
    </form>
</div> -->
