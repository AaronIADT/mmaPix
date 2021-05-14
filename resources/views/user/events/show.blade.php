@extends('layouts.appUser')

@section('content')
<div class="container">

    <div class="row">

        @if (count($fights) == 0)
        <h2a>There are no fights for this event yet.</h2a>
        @else

        <div class="col-md-12" style="text-align: center;">
            <br>
            <h1a style="text-align:center;">{{ $event->subName }} - {{ $event->nameEvent }}</h1a>

        </div>




        {{-- @foreach ($picks as $pick)

        @if ($pick->event_id == $event->id)
        <div class="col-md-4 offset-md-4" style="text-align: center;">
            <h7a style="color:black;">{{ $event->startTime }} / {{ $event->dateEvent }}</h7a>
        <h6 style="color:black;">{{ $event->location }}</h6>
        <br>
        <h5>You have already made your picks</h5>
        <a href="{{ route('user.picks.index') }}" class="btn btn-dark">View Picks</a>
    </div>
    @break($pick->event_id == $event->id)

        @elseif ($pick->event_id != $event->id)

        <div class="col-md-4 offset-md-4" style="text-align: center;">

            <h7a style="color:black;">{{ $event->startTime }} / {{ $event->dateEvent }}</h7a>
            <h6 style="color:black;">{{ $event->location }}</h6>
            <br>
            <h5>You havn't made your picks yet</h5>
            <a href="{{ route('user.picks.create', $event->id) }}" class="btn btn-dark">Add Pick</a>

            @break($pick->event_id != $event->id)
                <br>

        </div>

        @else

        @endif

        @endforeach --}}




        @foreach ($fights as $fight)
        @if ($fight->order == 1)
        <div class="col-12" style="text-align: center;">
            <br>
            <h2a>MAIN CARD</h2a>
            <br>
        </div>
        @elseif ($fight->order == 6)
        <div class="col-12" style="text-align: center;">
            <br>
            <br>
            <br>
            <h2a>PRELIMINARY CARD</h2a>
            <br>
            <br>
            <br>
        </div>
        @endif
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
                        <a href="{{ route('user.fighters.show', $fight->fighterA->id) }}">
                            <h6b class="card-title">{{ $fight->fighterA->name}}</h6b>
                        </a>

                    </div>
                    <div class="col-1" style="text-align: center; padding: 10px 0;">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h7 class="statMenuText" style=" font-style: bold; padding-left: 75px">{{ $fight->fighterA->age}}</h7>
                        <br>
                        <h7 class="statMenuText" style=" font-style: bold; padding-left: 75px">{{ $fight->fighterA->height}}"</h7>
                        <br>
                        <h7 class="statMenuText" style=" font-style: bold; padding-left: 45px">{{ $fight->fighterA->reach}}</h7>
                        <br>
                        <br>
                        <h7 class="statMenuText" style=" font-style: bold; padding-left: 55px">{{ $fight->odds1}}</h7>
                    </div>


                    <div class="col-4" style="text-align: center; padding: 10px 0;">

                        <h6 class="card-title weightText" style="text-align: center; padding: 15px 0" ;>{{ $fight->weightClass}}</h6>
                        <h4 class="VSText" style=" font-style: bold;">- vs -</h4>
                        <br>
                        <h7 class="statMenuText" style=" font-style: bold; text-align: left;">AGE</h7>
                        <br>
                        <h7 class="statMenuText" style=" font-style: bold;">HEIGHT</h7>
                        <br>
                        <h7 class="statMenuText" style=" font-style: bold;">REACH</h7>
                        <br>
                        <br>
                        <h7 class="statMenuText" style=" font-style: bold;">ODDS</h7>

                    </div>


                    <div class="col-1" style="text-align: center; padding: 10px 0;">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h7 class="statMenuText" style=" font-style: bold; padding-right: 200px">{{ $fight->fighterB->age}}</h7>
                        <br>
                        <h7 class="statMenuText" style=" font-style: bold; padding-right: 200px">{{ $fight->fighterB->height}}"</h7>
                        <br>
                        <h7 class="statMenuText" style=" font-style: bold; padding-right: 48px">{{ $fight->fighterB->reach}}</h7>
                        <br>
                        <br>
                        <h7 class="statMenuText" style=" font-style: bold; padding-right: 200px">{{ $fight->odds2}}</h7>
                    </div>

                    <div class="col-1" style="text-align: center; padding: 10px 0;">
                        <br>
                        <a href="{{ route('user.fighters.show', $fight->fighterB->id) }}">
                            <h6b class="card-title">{{ $fight->fighterB->name}}</h6b>
                        </a>
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




        </div>

        <hr>
        @endforeach
        @endif
        <div class="col-md-12 col-md-offset-2">
            <br>
            <br>
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