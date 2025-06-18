<!DOCTYPE html>
<html>
<head>
    <title>My CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        .cv-container {
            max-width: 800px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 25px;
            border-radius: 10px;
        }
        img {
            max-width: 150px;
            border-radius: 10px;
        }
        h2 {
            margin-top: 30px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }
        ul {
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <div class="cv-container">
        <h1>{{ $cv->name }}</h1>
        <p><strong>Address:</strong> {{ $cv->address }}</p>
        <img src="{{ asset('storage/' . $cv->photo) }}" alt="Profile Photo">

        <h2>Education</h2>
        <ul>
            @foreach(explode(',', $cv->education) as $edu)
                <li>{{ $edu }}</li>
            @endforeach
        </ul>

        <h2>Experience</h2>
        <ul>
            @foreach(explode(',', $cv->experience) as $exp)
                <li>{{ $exp }}</li>
            @endforeach
        </ul>

        <h2>Hobbies</h2>
        <ul>
            @foreach(explode(',', $cv->hobbies) as $hobby)
                <li>{{ $hobby }}</li>
            @endforeach
        </ul>

        <h2>Awards</h2>
        <ul>
            @foreach(explode(',', $cv->awards) as $award)
                <li>{{ $award }}</li>
            @endforeach
        </ul>

        <br>
        <a href="{{ route('cv.download', $cv->id) }}">Download CV as PDF</a>
    </div>
</body>
</html>


