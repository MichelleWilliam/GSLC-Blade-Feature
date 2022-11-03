@extends('master')
@section('title','Home')

@section('content')
    <center><h1>Halaman Home</h1></center>

    @if($name == 'admin')
        <p>hello,{{$name}}</p>
    @elseif($name == 'user')
        <p>hello,{{$name}}</p>
    @endif
@endsection
