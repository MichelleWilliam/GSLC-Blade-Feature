@extends('master')
@section('title','login')

@section('content')
    <form action="/login" method="post">
        @csrf
        <input type="text" name="name" id=""> <br>
        <input type="password" name="password" id=""> <br>
        <input type="submit" value="submit">
    </form>
@endsection
