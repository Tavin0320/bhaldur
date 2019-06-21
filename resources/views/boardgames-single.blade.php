@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <header>Our Boardgame Collection</header>
                <p>This is an in-development tool to collect and organize boardgames!</p>
            </div>

            @if(!is_null($boardgame->box_cover))
                <img width="200" height="auto" src="/images/boardgames/covers/{{$boardgame->box_cover}}" alt="{{$boardgame->title}}">
            @endif
            <table class="table"> 
                <tr>
                    <th>Title:</th>
                    <th>Minimum Players:</th>
                    <th>Maximum Players:</th>
                    <th>Publisher:</th>
                </tr>
                <tr>
                    <td>{{$boardgame->title}}</td>
                    <td>{{$boardgame->min_players}}</td>
                    <td>{{$boardgame->max_players}}</td>
                    <td>{{$boardgame->publisher->name}}</td>
                </tr>
            </table> 
        </div>
    </div>
</div>
@endsection
