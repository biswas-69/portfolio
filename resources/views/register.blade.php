@extends('partials.layout')
<style>
</style>
@section('content')
<h1> Registration Form</h1>
<form method="POST" action="/register">
    @csrf
    <input type="text" name="name" placeholder="Name" required/>
    <input type="email" name="email" placeholder="Email" required/>
    <input type="password" name="password" placeholder="Password" required/>
    <button type="submit">Register Now</button>
</form>
@endsection