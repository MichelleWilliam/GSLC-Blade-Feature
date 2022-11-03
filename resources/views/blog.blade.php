@extends('master')
@section('title','Blog')

@section('content')
    <center><h1>Halaman Blog</h1> <br>

    <div class="card mb-3" style="width: 35rem;">
        <div class="card-body">
            <h5 class="card-title">Web Programming part 1</h5>
            <h6 class="card-subtitle mb-2 text-muted">By : Jane Doe</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <a href="/web/programming/part/1">See</a>
    </div>

    <div class="card" style="width: 35rem;">
        <div class="card-body">
            <h5 class="card-title">Web Programming part 2</h5>
            <h6 class="card-subtitle mb-2 text-muted">By : John Doe</h6>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <a href="/web/programming/part/2">See</a>
    </div>

    </center>

@endsection
