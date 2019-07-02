@extends('layouts.app')

@section('content')
<!-- Singular view for boardgames, more details here not shown in the boardgame list view -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: auto;">
                <header>{{$boardgame->title}}</header>
                <p>This is an in-development tool to collect and organize board games!</p>
            </div>
            @if(!is_null($boardgame->box_cover))
                <img class="image-boardgame" width="200" height="auto" src="/images/boardgames/covers/{{$boardgame->box_cover}}" alt="{{$boardgame->title}}">
            @endif
        </div>
        <div class="col-md-10">
            <table class="table"> 
                <tr>
                    <th>Title:</th>
                    <th>Players:</th>
                    <th>Duration:</th>
                    <th>Recommended Age:</th>
                    <th>Publisher:</th>
                    <th>Release Year:</th>
                </tr>
                <tr>
                    <td>{{$boardgame->title}}</td>
                    @if($boardgame->max_players == 1)
                        <td>{{$boardgame->min_players}}</td>
                    @else
                        <td>{{$boardgame->min_players}}-{{$boardgame->max_players}}</td>
                    @endif
                    @if($boardgame->max_duration == 0)
                        <td>{{$boardgame->min_duration}} Min</td>
                    @else
                        <td>{{$boardgame->min_duration}}-{{$boardgame->max_duration}} Min</td>
                    @endif
                    <td>{{$boardgame->min_age}}+</td>
                    <td><a href="{{$boardgame->publisher->website}}">{{$boardgame->publisher->name}}</a></td>
                    <td>{{$boardgame->release_year}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
