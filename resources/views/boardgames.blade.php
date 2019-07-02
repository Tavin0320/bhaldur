@extends('layouts.app')

@section('content')
<!-- View for list of boardgames, clicking on a title leads to the singular view for
     that particular boardgame. Can also add boardgames here if user is registered and logged in. -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: auto;">
                <header>Our Boardgame Collection</header>
                <p>This is an in-development tool to collect and organize boardgames!</p>
            </div>
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
            @foreach($boardgames as $boardgame)
                <tr class="table-hover">
                    <td><a href="/boardgames/{{$boardgame->slug}}">{{$boardgame->title}}</a></td>
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
            @endforeach 
            </table> 
        </div>
    </div>
</div>
@endsection
