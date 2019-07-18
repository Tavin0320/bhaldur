@extends('layouts.app')

@section('content')
<!-- View for list of boardgames, clicking on a title leads to the singular view for
     that particular boardgame. Can also add boardgames here if user is registered and logged in. -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: auto;">
                <header>The Vault</header>
                <p>Browse through our fine selection of board games! Which game is your favourite?</p>
            </div>
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
                    <th>Rating:</th>
                </tr>
            @foreach($boardgames as $boardgame)
                <tr class="table-hover">
                    <td><a href="/boardgames/{{$boardgame->slug}}">{{$boardgame->title}}</a></td>
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
                    <td>{{$boardgame->rating}}/10</td>
                </tr>
            @endforeach 
            </table> 
        </div>
    </div>
</div>
@endsection
