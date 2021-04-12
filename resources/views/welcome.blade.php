@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upcoming events</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Welcome to MMApix.


                    </br>
                    </br>

                    Read more <a href="{{ route('about') }}">about us</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4" style=" overflow: scroll; height: 600px;">
            <a class="twitter-timeline" href="https://twitter.com/ufc?ref_src=twsrc%5Etfw">Tweets by ufc</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</div>
@endsection