<!DOCTYPE html>
<html>
<head>
    <title>CV Preview</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        .section {
            margin-bottom: 20px;
        }
        img {
            max-width: 200px;
            height: auto;
            margin-bottom: 20px;
        }
        ul {
            padding-left: 20px;
        }
        li {
            margin-bottom: 5px;
        }
        .download-button {
            display: inline-block;
            padding: 10px 15px;
            background-color: #10b981;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <h1>CV Preview</h1>

    <div class="section">
        <strong>Name:</strong> {{ $cv->name }}<br>
        <strong>Address:</strong> {{ $cv->address }}
    </div>

    <div class="section">
        <strong>Photo:</strong><br>
        @if($cv->photo)
            <img src="{{ asset('storage/' . $cv->photo) }}" alt="User Photo">
        @else
            <p>No photo uploaded.</p>
        @endif
    </div>

    <div class="section">
        <strong>Education:</strong>
        <ul>
            @foreach (json_decode($cv->education) as $edu)
                <li>{{ $edu }}</li>
            @endforeach
        </ul>
    </div>

    <div class="section">
        <strong>Experience:</strong>
        <ul>
            @foreach (json_decode($cv->experience) as $exp)
                <li>{{ $exp }}</li>
            @endforeach
        </ul>
    </div>

    <div class="section">
        <strong>Hobbies:</strong>
        <ul>
            @foreach (json_decode($cv->hobbies) as $hobby)
                <li>{{ $hobby }}</li>
            @endforeach
        </ul>
    </div>

    <div class="section">
        <strong>Awards:</strong>
        <ul>
            @foreach (json_decode($cv->award) as $award)
                <li>{{ $award }}</li>
            @endforeach
        </ul>
    </div>

    <a href="{{ route('cv.download', $cv->id) }}" class="download-button">Download CV as PDF</a>

</body>
</html>
