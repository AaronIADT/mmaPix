@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in as an Admin.
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
@section('footer')
<div class="container-fluid">
    @include('layouts.foot')
</div>
@endsection