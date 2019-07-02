@extends('layouts.app')

@section('content')
<!-- Singular view for boardgames, more details here not shown in the boardgame list view -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: auto;">
                <header>Our Boardgame Collection</header>
                <p>This is an in-development tool to collect and organize boardgames!</p>
            </div>
            @if(!is_null($boardgame->box_cover))
                <img class="image-boardgame" width="200" height="auto" src="/images/boardgames/covers/{{$boardgame->box_cover}}" alt="{{$boardgame->title}}">
            @endif
        </div>
        <div class="col-md-10">
            <table class="table"> 
                <tr>
                    <th>Title:</th>
                    <th>Minimum Players:</th>
                    <th>Maximum Players:</th>
                    <th>Duration (Min):</th>
                    <th>Minimum Age:</th>
                    <th>Publisher:</th>
                </tr>
                <tr>
                    <td>{{$boardgame->title}}</td>
                    <td>{{$boardgame->min_players}}</td>
                    <td>{{$boardgame->max_players}}</td>
                    @if($boardgame->max_duration == 0)
                        <td>{{$boardgame->min_duration}}</td>
                    @else
                        <td>{{$boardgame->min_duration}}-{{$boardgame->max_duration}}</td>
                    @endif
                    <td>{{$boardgame->min_age}}+</td>
                    <td><a href="{{$boardgame->publisher->website}}">{{$boardgame->publisher->name}}</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
