@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table"> 
                <tr>
                    <th>Name:</th>
                    <th>Publisher:</th>
                </tr>
            @foreach($boardgames as $boardgame)
                <tr>
                    <td>{{$boardgame->name}}</td>
                    <td>{{$boardgame->publisher->name}}</td>
                </tr>
            @endforeach 
            </table> 
        </div>
    </div>
</div>
@endsection
