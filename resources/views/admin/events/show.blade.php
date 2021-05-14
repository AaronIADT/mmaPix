@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12" style="text-align: center;">
            <h1a>{{ $event->subName}} - {{ $event->nameEvent}}</h1a>
            <br>
            <h4>Current Card</h4>
        </div>

        @if (count($fights) == 0)
        <p>There are no fights for this event yet.</p>
        @else
        @foreach ($fights as $fight)
        <div class="col-12">
            <hr>
            <div class="card-body">
                <div class="row">

                    <div class="col-2" style="padding: 10px 0;">
                        <a href="{{ route('admin.events.show', $event->id) }}">
                            <div class="img-container2">
                                <img class="img" src="{{ $fight->fighterA->picfighter}}" alt="Card image cap">
                            </div>
                        </a>
                    </div>
                    <div class="col-1" style="text-align: center; padding: 10px 0;">
                        <a href="{{ route('admin.fighters.show', $fight->fighterA->id) }}">
                            <h6a class="card-title">{{ $fight->fighterA->name}}</h6a>
                        </a>
                    </div>
                    <div class="col-1" style="text-align: center; padding: 10px 0;">

                    </div>

                    <div class="col-4" style="text-align: center; padding: 10px 0;">

                        <h6 class="card-title" style="text-align: center; padding: 15px 0;">{{ $fight->weightClass}}</h6>
                        <h4 style=" font-style: bold;">vs</h4>
                        <br>
                        <h6>Fight Order: {{ $fight->order}}</h6>

                    </div>
                    <div class="col-1" style="text-align: center; padding: 10px 0;">
                    </div>
                    <div class="col-1" style="text-align: center; padding: 10px 0;">
                        <a href="{{ route('admin.fighters.show', $fight->fighterB->id) }}">
                            <h6a class="card-title">{{ $fight->fighterB->name}}</h6a>
                        </a>
                    </div>
                    <div class="col-2" style="padding: 10px 0;">
                        <a href="{{ route('admin.events.show', $event->id) }}">
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
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Book: {{ $event->nameEvent }}
                </div>

                <div class="card-body">


                    <a href="{{ route('admin.events.index') }}" class="btn btn-light">Back</a>



                    <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-dark">Edit</a>
                    <form style="display:inline-block" method="POST" action="{{  route('admin.events.destroy', $event->id)  }}">
                        <input type="hidden" name="method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="form-control btn btn-danger">Delete</a>
                    </form>


                </div>
                <a href="{{ route('admin.fights.create', $event->id) }}" class="btn btn-dark">Add Fight</a>
                <a href="{{ route('admin.picks.create', $event->id) }}" class="btn btn-light">Add Pick</a>
            </div>
        </div>










        {{-- <ul>

            @foreach ($fights as $fight)
            @foreach ($fight->fighters as $fighter)
            <li>{{ $fight->fighter->name}} vs {{ $fight->fighter->name}} - {{ $fight->order }}</li>
        @endforeach
        @endforeach


        </ul> --}}



    </div>
</div>

@endsection
@section('footer')
<div class="container-fluid">
    @include('layouts.foot')
</div>
@endsection