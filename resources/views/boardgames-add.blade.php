@extends('layouts.app')

@section('content')
<!-- Page for adding new boardgames -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: auto;">
                <header>Add A Board Game!</header>
                <form method="POST" action="/boardgames/store">
                @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Name of Board Game</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="min-player">Minimum Players:</label>
                                <select class="form-control" name="min-player" id="min-player">
                                @for($min = 1; $min <= 4; $min++)
                                    <option>{{$min}}</option>
                                @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="max-player">Maximum Players:</label>
                                <select class="form-control" name="max-player" id="max-player">
                                @for($max = 1; $max <= 12; $max++)
                                    <option>{{$max}}</option>
                                @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="min-duration">Minimum Duration (Minutes)</label>
                                <input type="text" class="form-control" name="min-duration" id="min-duration">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="max-duration">Maximum Duration (Minutes)</label>
                                <input type="text" class="form-control" name="max-duration" id="max-duration">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="min-age">Minimum Age:</label>
                                <select class="form-control" name="min-age" id="min-age">
                                @for($min = 1; $min <= 18; $min++)
                                    <option>{{$min}}</option>
                                @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="publisher">Publisher</label>
                                <select class="form-control" name="publisher" id="publisher-id">
                                    @foreach($publishers as $publisher)
                                    <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="release-year">Release Year</label>
                                <input type="text" class="form-control" name="release-year" id="release-year" placeholder="Please enter a year">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="rating">Rating</label>
                                <select class="form-control" name="rating" id="rating">
                                @for($rate = 1; $rate <= 10; $rate++)
                                    <option>{{$rate}}</option>
                                @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea rows="4" cols="50" class="form-control" name="description" id="description" placeholder="Provide a brief description of the board game"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <button type="reset" class="btn btn-primary">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
