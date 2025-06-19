@extends('partial.layout')
<style>
body{
     background:rgb(45, 51, 43)
      color: #333;
      line-height: 1px;
    }

 .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 60px 10%;
        flex-wrap: wrap;
    }
    .left {
        flex: 1;
        min-width: 300px;
    }

    .left h1 {
        font-size: 48px;
        color: rgb(73, 74, 72);
        margin-bottom: 20px;
    }
    .left p {
        font-size: 18px;
        max-width: 500px;
        margin-bottom: 30px;
    }
    .right {
        flex: 1;
        min-width: 300px;
        display: flex;
        justify-content: center;
    }
    .right img {
        width: 300px;
        height: 300px;
        object-fit: cover;
        border: 6px;
    }
    </style>
    @section('content')
     <div class="container">
        <div class="left">
            <h1>Hello, I'm Anju</h1>
<div class="contailer">
  <div class="top-right-btn">
    <a href="/addprofile">ADD</a>
  </div>

  <ul>
    @foreach ($projects as $pro)
      <li>
        <div class="left">
            <div class="h1">
            <label for="title"> <b></b>
                    <input type="text"  name="title" required>
            </label>
            </div>
            <div class="p">
            <label for="others"> <b></b><b></b>
                    <input type="text"  name="others" required>
                    </label>
            </div>
        </div>
        <div class="right">
          <div class="img">
            <img id="image" src="{{ asset($pro['photo']) }}" alt="img">
          </div>
          <p>{{ $pro->name }}</p>
          <aside>
            <a type="button" class="edit_btn" href="/update/{{ $pro['id'] }}">Edit</a>
            <form method="POST" action="/delete/{{ $pro['id'] }}">
              @csrf
              @method("DELETE")
              <button type="button" class="del_btn">Delete</button>
            </form>
          </aside>
        </div>
      </li>
    @endforeach
  </ul>

  <div class="pagination">
    {{ $profiles->links() }}
  </div>
</div>
@endsection
