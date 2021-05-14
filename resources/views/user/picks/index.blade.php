@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p id="alert-message" class="alert collapse"></p>

            {{-- <div class="card">
                <div class="card-header">
                    Picks

                </div>

                <div class="card-body">
                    @if (count($picks) === 0)
                    <p>There are no picks</p>
                    @else
                    <table id="table-picks" class="table table-hover">
                        <thead>
                            <th>Event Name</th>
                            <th>Pick 1:</th>
                            <th>Pick 2:</th>
                            <th>Pick 3:</th>
                            <th>Pick 4:</th>
                            <th>Pick 5:</th>
                            <th>Pick 6:</th>
                            <th>Pick 7:</th>
                            <th>Pick 8:</th>
                            <th>Pick 9:</th>
                            <th>Pick 10:</th>
                        </thead>
                        <tbody>
                            @foreach ($picks as $pick)
                            <tr data-id="{{ $pick->id }}">
            <td>{{ $pick->event->subName }} - {{ $pick->event->nameEvent }}</td>
            <td>{{ $pick->pick1->name }}</td>
            <td>{{ $pick->pick2->name }}</td>
            <td>{{ $pick->pick3->name }}</td>
            <td>{{ $pick->pick4->name }}</td>
            <td>{{ $pick->pick5->name }}</td>
            <td>{{ $pick->pick6->name }}</td>
            <td>{{ $pick->pick7->name }}</td>
            <td>{{ $pick->pick8->name }}</td>
            <td>{{ $pick->pick9->name }}</td>
            <td>{{ $pick->pick10->name }}</td>

            <td>
                <a href="{{ route('user.picks.show', $pick->id) }}" class="btn btn-primary">View</a>
                <a href="{{ route('user.picks.edit', $pick->id) }}" class="btn btn-warning">Edit</a>
                <form style="display:inline-block" method="POST" action="{{ route('user.picks.destroy', $pick->id) }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="form-control btn btn-danger">Delete</button>
                </form>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            @endif
        </div>
    </div> --}}



    {{-- <div class="card">
                <div class="card-header">
                    Picks
                    <a href="{{ route('admin.picks.create') }}" class="btn btn-primary float-right">Add</a>
</div>

<div class="card-body">
    @if (count($picks) === 0)
    <p>There are no picks</p>
    @else
    <table id="table-picks" class="table table-hover">
        <thead>
            <th>Event Name</th>
            <th>Pick 1:</th>
            <th>Pick 2:</th>
            <th>Pick 3:</th>
            <th>Pick 4:</th>
            <th>Pick 5:</th>
            <th>Pick 6:</th>
            <th>Pick 7:</th>
            <th>Pick 8:</th>
            <th>Pick 9:</th>
            <th>Pick 10:</th>
        </thead>
        <tbody>
            @foreach ($picks as $pick)
            <tr data-id="{{ $pick->id }}">
                <td>{{ $pick->event->subName }} - {{ $pick->event->nameEvent }}</td>
                <td>{{ $pick->pick1->name }}</td>
                <td>{{ $pick->pick2->name }}</td>
                <td>{{ $pick->pick3->name }}</td>
                <td>{{ $pick->pick4->name }}</td>
                <td>{{ $pick->pick5->name }}</td>
                <td>{{ $pick->pick6->name }}</td>
                <td>{{ $pick->pick7->name }}</td>
                <td>{{ $pick->pick8->name }}</td>
                <td>{{ $pick->pick9->name }}</td>
                <td>{{ $pick->pick10->name }}</td>

                <td>
                    <a href="{{ route('admin.picks.show', $pick->id) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('admin.picks.edit', $pick->id) }}" class="btn btn-warning">Edit</a>
                    <form style="display:inline-block" method="POST" action="{{ route('admin.picks.destroy', $pick->id) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="form-control btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</div> --}}
<div class="col-4 offset-md-4" style="text-align: center;">


    <h1a>Your Picks</h1a>
</div>
@if (count($picks) === 0)

<div class="col-4 offset-md-4">


    <h6a>There are no picks</h6a>
</div>
@else


@foreach ($picks as $pick)



<div class="container">
    <hr>
    <br>
    <div style="text-align: center;">
        <h2a>{{ $pick->event->subName }} - {{ $pick->event->nameEvent }}</h2a>
    </div>
    <br>



    @if ($pick->fighter_id1)
    <div class="row">

        @foreach ($picksAdmin as $picksA)

        {{-- IF WINNER CHECK --}}
        @if ($picksA->event_id == $pick->event_id && $picksA->pick1->name == $pick->pick1->name)


        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick1->name }} </h5a><img class="img imgSymbol" src="{{ asset('photo/correct.png') }}">
                    <h5>{{ $pick->pick1->record }}</h5>
                    <h5>{{ $pick->pick1->weight }}</h5>
                    <h5 class="textCorrect">WINNER</h5>

                </div>
                <div class="col-4">
                    <br>
                    {{-- <img class="img imgSymbol" src="{{ asset('photo/correct.png') }}"> --}}

                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick1->picfighter }}">
                </div>

            </div>
        </div>

        {{-- IF LOSER CHECK --}}
        @elseif ($picksA->event_id == $pick->event_id && $picksA->pick1->name != $pick->pick1->name)
        <div class="col-6 card1 ">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick1->name }}</h5a><img class="img imgSymbol" src="{{ asset('photo/wrong.png') }}">
                    <h5>{{ $pick->pick1->record }}</h5>
                    <h5>{{ $pick->pick1->weight }}</h5>
                    <h5 class="textWrong">LOSER</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick1->picfighter }}">
                </div>

            </div>
        </div>




        @else
        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick1->name }}</h5a>
                    <h5>{{ $pick->pick1->record }}</h5>
                    <h5>{{ $pick->pick1->weight }}</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick1->picfighter }}">
                </div>

            </div>
        </div>

        @endif
        @endforeach

        @foreach ($picksAdmin as $picksA)

        {{-- IF WINNER CHECK --}}
        @if ($picksA->event_id == $pick->event_id && $picksA->pick2->name == $pick->pick2->name)


        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick2->name }} </h5a><img class="img imgSymbol" src="{{ asset('photo/correct.png') }}">
                    <h5>{{ $pick->pick2->record }}</h5>
                    <h5>{{ $pick->pick2->weight }}</h5>
                    <h5 class="textCorrect">WINNER</h5>

                </div>
                <div class="col-4">
                    <br>
                    {{-- <img class="img imgSymbol" src="{{ asset('photo/correct.png') }}"> --}}

                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick2->picfighter }}">
                </div>

            </div>
        </div>

        {{-- IF LOSER CHECK --}}
        @elseif ($picksA->event_id == $pick->event_id && $picksA->pick2->name != $pick->pick2->name)
        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick2->name }}</h5a><img class="img imgSymbol" src="{{ asset('photo/wrong.png') }}">
                    <h5>{{ $pick->pick2->record }}</h5>
                    <h5>{{ $pick->pick2->weight }}</h5>
                    <h5 class="textWrong">LOSER</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick2->picfighter }}">
                </div>

            </div>
        </div>




        @else
        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick2->name }}</h5a>
                    <h5>{{ $pick->pick2->record }}</h5>
                    <h5>{{ $pick->pick2->weight }}</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick2->picfighter }}">
                </div>

            </div>
        </div>

        @endif
        @endforeach
    </div>

    <div class="row">
        @foreach ($picksAdmin as $picksA)

        {{-- IF WINNER CHECK --}}
        @if ($picksA->event_id == $pick->event_id && $picksA->pick3->name == $pick->pick3->name)


        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick3->name }} </h5a><img class="img imgSymbol" src="{{ asset('photo/correct.png') }}">
                    <h5>{{ $pick->pick3->record }}</h5>
                    <h5>{{ $pick->pick3->weight }}</h5>
                    <h5 class="textCorrect">WINNER</h5>

                </div>
                <div class="col-4">
                    <br>
                    {{-- <img class="img imgSymbol" src="{{ asset('photo/correct.png') }}"> --}}

                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick3->picfighter }}">
                </div>

            </div>
        </div>

        {{-- IF LOSER CHECK --}}
        @elseif ($picksA->event_id == $pick->event_id && $picksA->pick3->name != $pick->pick3->name)
        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick3->name }}</h5a><img class="img imgSymbol" src="{{ asset('photo/wrong.png') }}">
                    <h5>{{ $pick->pick3->record }}</h5>
                    <h5>{{ $pick->pick3->weight }}</h5>
                    <h5 class="textWrong">LOSER</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick3->picfighter }}">
                </div>

            </div>
        </div>




        @else
        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick3->name }}</h5a>
                    <h5>{{ $pick->pick3->record }}</h5>
                    <h5>{{ $pick->pick3->weight }}</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick3->picfighter }}">
                </div>

            </div>
        </div>

        @endif
        @endforeach


        @foreach ($picksAdmin as $picksA)

        {{-- IF WINNER CHECK --}}
        @if ($picksA->event_id == $pick->event_id && $picksA->pick4->name == $pick->pick4->name)


        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick4->name }} </h5a><img class="img imgSymbol" src="{{ asset('photo/correct.png') }}">
                    <h5>{{ $pick->pick4->record }}</h5>
                    <h5>{{ $pick->pick4->weight }}</h5>
                    <h5 class="textCorrect">WINNER</h5>

                </div>
                <div class="col-4">
                    <br>
                    {{-- <img class="img imgSymbol" src="{{ asset('photo/correct.png') }}"> --}}

                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick4->picfighter }}">
                </div>

            </div>
        </div>

        {{-- IF LOSER CHECK --}}
        @elseif ($picksA->event_id == $pick->event_id && $picksA->pick4->name != $pick->pick4->name)
        <div class="col-6 card1 ">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick4->name }}</h5a><img class="img imgSymbol" src="{{ asset('photo/wrong.png') }}">
                    <h5>{{ $pick->pick4->record }}</h5>
                    <h5>{{ $pick->pick4->weight }}</h5>
                    <h5 class="textWrong">LOSER</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick4->picfighter }}">
                </div>

            </div>
        </div>




        @else
        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick4->name }}</h5a>
                    <h5>{{ $pick->pick4->record }}</h5>
                    <h5>{{ $pick->pick4->weight }}</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick4->picfighter }}">
                </div>

            </div>
        </div>

        @endif
        @endforeach
    </div>

    <div class="row">
        @foreach ($picksAdmin as $picksA)

        {{-- IF WINNER CHECK --}}
        @if ($picksA->event_id == $pick->event_id && $picksA->pick5->name == $pick->pick5->name)


        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick5->name }} </h5a><img class="img imgSymbol" src="{{ asset('photo/correct.png') }}">
                    <h5>{{ $pick->pick5->record }}</h5>
                    <h5>{{ $pick->pick5->weight }}</h5>
                    <h5 class="textCorrect">WINNER</h5>

                </div>
                <div class="col-4">
                    <br>
                    {{-- <img class="img imgSymbol" src="{{ asset('photo/correct.png') }}"> --}}

                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick5->picfighter }}">
                </div>

            </div>
        </div>

        {{-- IF LOSER CHECK --}}
        @elseif ($picksA->event_id == $pick->event_id && $picksA->pick5->name != $pick->pick5->name)
        <div class="col-6 card1 ">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick5->name }}</h5a><img class="img imgSymbol" src="{{ asset('photo/wrong.png') }}">
                    <h5>{{ $pick->pick5->record }}</h5>
                    <h5>{{ $pick->pick5->weight }}</h5>
                    <h5 class="textWrong">LOSER</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick5->picfighter }}">
                </div>

            </div>
        </div>




        @else
        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick5->name }}</h5a>
                    <h5>{{ $pick->pick5->record }}</h5>
                    <h5>{{ $pick->pick5->weight }}</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick5->picfighter }}">
                </div>

            </div>
        </div>

        @endif
        @endforeach

        @foreach ($picksAdmin as $picksA)

        {{-- IF WINNER CHECK --}}
        @if ($picksA->event_id == $pick->event_id && $picksA->pick6->name == $pick->pick6->name)


        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick6->name }} </h5a><img class="img imgSymbol" src="{{ asset('photo/correct.png') }}">
                    <h5>{{ $pick->pick6->record }}</h5>
                    <h5>{{ $pick->pick6->weight }}</h5>
                    <h5 class="textCorrect">WINNER</h5>

                </div>
                <div class="col-4">
                    <br>
                    {{-- <img class="img imgSymbol" src="{{ asset('photo/correct.png') }}"> --}}

                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick6->picfighter }}">
                </div>

            </div>
        </div>

        {{-- IF LOSER CHECK --}}
        @elseif ($picksA->event_id == $pick->event_id && $picksA->pick6->name != $pick->pick6->name)
        <div class="col-6 card1 ">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick6->name }}</h5a><img class="img imgSymbol" src="{{ asset('photo/wrong.png') }}">
                    <h5>{{ $pick->pick6->record }}</h5>
                    <h5>{{ $pick->pick6->weight }}</h5>
                    <h5 class="textWrong">LOSER</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick6->picfighter }}">
                </div>

            </div>
        </div>




        @else
        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick6->name }}</h5a>
                    <h5>{{ $pick->pick6->record }}</h5>
                    <h5>{{ $pick->pick6->weight }}</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick6->picfighter }}">
                </div>

            </div>
        </div>

        @endif
        @endforeach
    </div>

    <div class="row">
        @foreach ($picksAdmin as $picksA)

        {{-- IF WINNER CHECK --}}
        @if ($picksA->event_id == $pick->event_id && $picksA->pick7->name == $pick->pick7->name)


        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick7->name }} </h5a><img class="img imgSymbol" src="{{ asset('photo/correct.png') }}">
                    <h5>{{ $pick->pick7->record }}</h5>
                    <h5>{{ $pick->pick7->weight }}</h5>
                    <h5 class="textCorrect">WINNER</h5>

                </div>
                <div class="col-4">
                    <br>
                    {{-- <img class="img imgSymbol" src="{{ asset('photo/correct.png') }}"> --}}

                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick7->picfighter }}">
                </div>

            </div>
        </div>

        {{-- IF LOSER CHECK --}}
        @elseif ($picksA->event_id == $pick->event_id && $picksA->pick7->name != $pick->pick7->name)
        <div class="col-6 card1 ">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick7->name }}</h5a><img class="img imgSymbol" src="{{ asset('photo/wrong.png') }}">
                    <h5>{{ $pick->pick7->record }}</h5>
                    <h5>{{ $pick->pick7->weight }}</h5>
                    <h5 class="textWrong">LOSER</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick7->picfighter }}">
                </div>

            </div>
        </div>




        @else
        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick7->name }}</h5a>
                    <h5>{{ $pick->pick7->record }}</h5>
                    <h5>{{ $pick->pick7->weight }}</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick7->picfighter }}">
                </div>

            </div>
        </div>

        @endif
        @endforeach

        @foreach ($picksAdmin as $picksA)

        {{-- IF WINNER CHECK --}}
        @if ($picksA->event_id == $pick->event_id && $picksA->pick8->name == $pick->pick8->name)


        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick8->name }} </h5a><img class="img imgSymbol" src="{{ asset('photo/correct.png') }}">
                    <h5>{{ $pick->pick8->record }}</h5>
                    <h5>{{ $pick->pick8->weight }}</h5>
                    <h5 class="textCorrect">WINNER</h5>

                </div>
                <div class="col-4">
                    <br>
                    {{-- <img class="img imgSymbol" src="{{ asset('photo/correct.png') }}"> --}}

                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick8->picfighter }}">
                </div>

            </div>
        </div>

        {{-- IF LOSER CHECK --}}
        @elseif ($picksA->event_id == $pick->event_id && $picksA->pick8->name != $pick->pick8->name)
        <div class="col-6 card1 ">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick8->name }}</h5a><img class="img imgSymbol" src="{{ asset('photo/wrong.png') }}">
                    <h5>{{ $pick->pick8->record }}</h5>
                    <h5>{{ $pick->pick8->weight }}</h5>
                    <h5 class="textWrong">LOSER</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick8->picfighter }}">
                </div>

            </div>
        </div>




        @else
        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick8->name }}</h5a>
                    <h5>{{ $pick->pick8->record }}</h5>
                    <h5>{{ $pick->pick8->weight }}</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick8->picfighter }}">
                </div>

            </div>
        </div>

        @endif
        @endforeach
    </div>

    <div class="row">
        @foreach ($picksAdmin as $picksA)

        {{-- IF WINNER CHECK --}}
        @if ($picksA->event_id == $pick->event_id && $picksA->pick9->name == $pick->pick9->name)


        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick9->name }} </h5a><img class="img imgSymbol" src="{{ asset('photo/correct.png') }}">
                    <h5>{{ $pick->pick9->record }}</h5>
                    <h5>{{ $pick->pick9->weight }}</h5>
                    <h5 class="textCorrect">WINNER</h5>

                </div>
                <div class="col-4">
                    <br>
                    {{-- <img class="img imgSymbol" src="{{ asset('photo/correct.png') }}"> --}}

                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick9->picfighter }}">
                </div>

            </div>
        </div>

        {{-- IF LOSER CHECK --}}
        @elseif ($picksA->event_id == $pick->event_id && $picksA->pick9->name != $pick->pick9->name)
        <div class="col-6 card1 ">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick9->name }}</h5a><img class="img imgSymbol" src="{{ asset('photo/wrong.png') }}">
                    <h5>{{ $pick->pick9->record }}</h5>
                    <h5>{{ $pick->pick9->weight }}</h5>
                    <h5 class="textWrong">LOSER</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick9->picfighter }}">
                </div>

            </div>
        </div>




        @else
        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick9->name }}</h5a>
                    <h5>{{ $pick->pick9->record }}</h5>
                    <h5>{{ $pick->pick9->weight }}</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick9->picfighter }}">
                </div>

            </div>
        </div>

        @endif
        @endforeach

        @foreach ($picksAdmin as $picksA)

        {{-- IF WINNER CHECK --}}
        @if ($picksA->event_id == $pick->event_id && $picksA->pick10->name == $pick->pick10->name)


        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick10->name }} </h5a><img class="img imgSymbol" src="{{ asset('photo/correct.png') }}">
                    <h5>{{ $pick->pick10->record }}</h5>
                    <h5>{{ $pick->pick10->weight }}</h5>
                    <h5 class="textCorrect">WINNER</h5>

                </div>
                <div class="col-4">
                    <br>
                    {{-- <img class="img imgSymbol" src="{{ asset('photo/correct.png') }}"> --}}

                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick10->picfighter }}">
                </div>

            </div>
        </div>

        {{-- IF LOSER CHECK --}}
        @elseif ($picksA->event_id == $pick->event_id && $picksA->pick10->name != $pick->pick10->name)
        <div class="col-6 card1 ">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick10->name }}</h5a><img class="img imgSymbol" src="{{ asset('photo/wrong.png') }}">
                    <h5>{{ $pick->pick10->record }}</h5>
                    <h5>{{ $pick->pick10->weight }}</h5>
                    <h5 class="textWrong">LOSER</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick10->picfighter }}">
                </div>

            </div>
        </div>




        @else
        <div class="col-6 card1">
            <div class="row">

                <div class="col-4">


                    <h5a>{{ $pick->pick10->name }}</h5a>
                    <h5>{{ $pick->pick10->record }}</h5>
                    <h5>{{ $pick->pick10->weight }}</h5>

                </div>
                <div class="col-4">
                    <br>
                </div>

                <div class="img-container4">
                    <img class="img" src="{{ $pick->pick10->picfighter }}">
                </div>

            </div>
        </div>

        @endif
        @endforeach
    </div>


    @endif


</div>
<hr>
@endforeach


@endif

</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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