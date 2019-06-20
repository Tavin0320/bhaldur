@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <header>Welcome to Cool Collections!</header>
                <p>This is a helpful tool which collects and organizes board games in our house.</p>
            </div>
            <div>
                <a href="{{ url('/boardgames') }}">
                    <img src="https://nouzie.com/wp-content/uploads/85975/board-games-and-chess-club-tonight-at-the-library-from-630-8pm.-free.jpg" alt="chess thing"/>
                </a>
            </div>
            <div>
                <p>Click on the image to get started!</p>
            </div>
        </div>
    </div>
</div>
@endsection
