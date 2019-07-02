@extends('layouts.app')

@section('content')
<!-- About page. -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: auto;">
                <header>About Me</header>
                <img class=" image-about img-fluid" width="100" height="auto" src="/images/bhaldur.jpg" alt="Bhaldur">
                <div>
                    <h1>Who Am I?</h1>
                    <p class="card-text">Hello there! My name is Tavin Bousfield and I'm the one responsible for 
                                        the creation and continued maintenance of this site.</p>
                </div>
                <div>
                    <h1>Contact Information</h1>
                    <p class="card-text">If you have any questions feel free to contact me at:</p>
                </div>
                <div>
                    <p class="about">Email: tavin.bousfield@gmail.com</p>
                    <p class="about">Twitter: <a href="https://twitter.com/Bhaldurdash?lang=en">@Bhaldurdash</a></p>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection