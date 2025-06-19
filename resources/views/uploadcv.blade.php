@extends('partial.layout')

@section('content')
    <h1>Upload Your CV</h1>
    <div class="container">
        <form class="form" method="POST" action="/cv" enctype="multipart/form-data">
            @csrf
            <label for="cv_file">Choose CV File</label>
            <input type="file" name="cv_file" id="cv_file" required>

            <div class="sub_btns">
                <button type="submit">Upload</button>
                <a href="/cv">Back</a>
            </div>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li><strong>{{ $error }}</strong></li>
                    @endforeach
                </ul>
            @endif
        </form>
    </div>
@endsection
