@extends('partial.layout')
  <style>
    body {
      background-color: rgb(51, 164, 198);
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: white;
      margin-bottom: 40px;
    }

    .container {
      max-width: 900px;
      margin: 0 auto;
    }

    .project {
      background-color: white;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 30px;
      display: flex;
      flex-direction: column; 
      gap: 30px;
      position: relative;
    }

    .project-row {
      display: flex;
      gap: 20px;
      align-items: flex-start; 
    }

    .project img {
      width: 200px;
      height: auto;
      border-radius: 10px;
    }

    .project-content {
      flex: 1;
    }

    .project-content h2 {
      margin: 0 0 10px;
      color: #333;
    }

    .project-content .details {
      margin: 0;
      color: #555;
    }

    .project-content a {
      color: #007bff;
      text-decoration: none;
      display: inline-block;
      margin-top: 5px;
    }

    .project-content a:hover {
      text-decoration: underline;
    }

    .top-right-btn {
      display: flex;
      justify-content: flex-end;
      margin-bottom: -10px;
      margin-right: 20px;
    }

    .top-right-btn a button {
      background-color: #10e117;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      color: white;
      font-size: 14px;
      cursor: pointer;
    }
  </style>
  @section('content')

<h1> My TODO List </h1>
    <div class="content">
        <div class="top-right-btn">
                <a href="/addp" class="top-right-btn"> ADD </a><br><br>
                <form method="POST" action="/project">


        </div>
        <ul>
            @foreach ($projects as $pro)
        <li><div class="list">
            <div class="image">
                <img id="image" src="{{asset($pro['photo']) }}" alt="img">
            </div>
            <p>{{$pro->name}}</p>
            <aside>
                <a type="button" class="edit_btn" href="/update/{{$pro['id']}}">Edit</a>
                <form method="POST" action="/delete/{{$pro['id']}}">
                    @csrf
                    @method("DELETE")
                <button type="button" class="del_btn">Delete</button>
                </form>
            </aside>
            
        </div></li>
        @endforeach
        </ul>
        <div>
         {{$projects->links()}}
    
        </div>
    </div>
@endsection
