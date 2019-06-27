@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: auto;">
                <header>Welcome to Cool Collections!</header>
                <p>This is a helpful tool which collects and organizes board games in our home. 
                    Login if you have a board game to submit!</p>
            </div>
            <div>
                <a href="{{ url('/boardgames') }}">
                    <img class="image-home img-fluid" width="730" height="auto" src="https://nouzie.com/wp-content/uploads/85975/board-games-and-chess-club-tonight-at-the-library-from-630-8pm.-free.jpg" alt="chess thing"/>
                </a>
            </div>
            <div class="card" style="width: auto; margin-top: 20px; margin-bottom: 0; padding: 20px">
                <h1>How Do I Add a Boardgame?</h2>
                <p>Adding a boardgame is easy! First simply login and visit the Boardgame Collection page. 
                   From there you can submit a boardgame to be reviewed and approved by the site moderators, 
                   it's that simple!</p>
            </div>
        </div>
    </div>
</div>
@endsection
