<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CV PDF</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
            line-height: 1.5;
        }
        .section {
            margin-bottom: 20px;
        }
        img {
            max-width: 150px;
            height: auto;
        }
        ul {
            padding-left: 20px;
        }
    </style>
</head>
<body>

    <h2>Curriculum Vitae</h2>

    <div class="section">
        <strong>Name:</strong> {{ $cv->name }}<br>
        <strong>Address:</strong> {{ $cv->address }}
    </div>

    <div class="section">
        @if($cv->photo)
            <strong>Photo:</strong><br>
            <img src="{{ public_path('storage/' . $cv->photo) }}" alt="User Photo">
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

</body>
</html>
