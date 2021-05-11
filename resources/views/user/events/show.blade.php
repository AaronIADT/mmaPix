@extends('layouts.appUser')

@section('content')
<div class="container">
    <div class="row">

        @if (count($fights) == 0)
        <h2a>There are no fights for this event yet.</h2a>
        @else

        @foreach ($fights as $fight)
        <div class="col-12">
            <hr>
            <div class="card-body card1">
                <div class="row">

                    <div class="col-2" style="padding: 10px 0;">
                        <a href="{{ route('user.events.show', $event->id) }}">
                            <br>
                            <div class="img-container2">
                                <img class="img" src="{{ $fight->fighterA->picfighter}}" alt="Card image cap">
                            </div>
                        </a>
                    </div>

                    <div class="col-1" style="text-align: center; padding: 10px 0;">
                        <br>
                        <a href="{{ route('user.fighters.index') }}">
                            <h6a class="card-title">{{ $fight->fighterA->name}}</h6a>
                        </a>
                        <br>
                        <br>
                        <h7 style=" font-style: bold;">{{ $fight->odds1}}</h7>
                    </div>
                    <div class="col-1" style="text-align: center; padding: 10px 0;">

                    </div>

                    <div class="col-4" style="text-align: center; padding: 10px 0;">

                        <h6 class="card-title" style="text-align: center; padding: 15px 0" ;>{{ $fight->weightClass}}</h6>
                        <br>
                        <h4 style=" font-style: bold;">- vs -</h4>

                        <br>
                        <h7 style=" font-style: bold;">ODDS</h7>

                    </div>
                    <div class="col-1" style="text-align: center; padding: 10px 0;">
                    </div>
                    <div class="col-1" style="text-align: center; padding: 10px 0;">
                        <br>
                        <a href="{{ route('user.fighters.index') }}">
                            <h6a class="card-title">{{ $fight->fighterB->name}}</h6a>
                        </a>
                        <br>
                        <br>
                        <h7 style=" font-style: bold;">{{ $fight->odds2}}</h7>
                    </div>

                    <div class="col-2" style="padding: 10px 0;">
                        <br>
                        <a href="{{ route('user.events.show', $event->id) }}">
                            <div class="img-container2">
                                <img class="img" src="{{ $fight->fighterB->picfighter}}" alt="Card image cap">
                            </div>
                        </a>
                    </div>

                    <br>
                </div>

            </div>


            <hr>

        </div>
        @endforeach
        @endif
        <div class="col-md-12 col-md-offset-2">

            <a href="{{ route('user.picks.create', $event->id) }}" class="btn btn-dark">Add Pick</a>
            <a href="{{ route('user.events.index') }}" class="btn btn-default">Back</a>

        </div>

        {{-- <ul>
            @if (count($fights) == 0)
            <p>There are no fights for this event yet.</p>
            @else
            @foreach ($fights as $fight)
            <li>{{ $fight->fighterA->name}} vs {{ $fight->fighterB->name}} - {{ $fight->order }}</li>
        @endforeach
        @endif

        </ul> --}}









        {{-- <ul>

            @foreach ($fights as $fight)
            @foreach ($fight->fighters as $fighter)
            <li>{{ $fight->fighter->name}} vs {{ $fight->fighter->name}} - {{ $fight->order }}</li>
        @endforeach
        @endforeach


        </ul> --}}



    </div>
</div>
<br>
<br>
<br>
<br>
@endsection
@section('footer')
<div class="container-fluid">
    @include('layouts.foot')
</div>
@endsection