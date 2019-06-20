@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <header>Our Boardgame Collection</header>
                <p>This is an in-development tool to collect and organize boardgames!</p>
            </div>
            <table class="table"> 
                <tr>
                    <th>Title:</th>
                    <th>Minimum Players:</th>
                    <th>Maximum Players:</th>
                    <th>Publisher:</th>
                </tr>
            @foreach($boardgames as $boardgame)
                <tr>
                    <td>{{$boardgame->title}}</td>
                    <td>{{$boardgame->min_players}}</td>
                    <td>{{$boardgame->max_players}}</td>
                    <td>{{$boardgame->publisher->name}}</td>
                </tr>
            @endforeach 
            </table> 
        </div>
    </div>
</div>
@endsection
