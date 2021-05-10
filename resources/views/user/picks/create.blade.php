@extends('layouts.appUser')

@section('content')
<div class="container">
    {{-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    {{$event->nameEvent}}: Add new Pick
</div>


<div class="panel-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('user.picks.store', $event->id) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="fighter_id1">Fighter pick 1: </label>
            <select name="fighter_id1">
                @foreach ($fighters as $fighter)
                <option value="{{ $fighter->id }}">{{ $fighter->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fighter_id2">Fighter pick 2: </label>
            <select name="fighter_id2">
                @foreach ($fighters as $fighter)
                <option value="{{ $fighter->id }}">{{ $fighter->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fighter_id3">Fighter pick 3: </label>
            <select name="fighter_id3">
                @foreach ($fighters as $fighter)
                <option value="{{ $fighter->id }}">{{ $fighter->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fighter_id4">Fighter pick 4: </label>
            <select name="fighter_id4">
                @foreach ($fighters as $fighter)
                <option value="{{ $fighter->id }}">{{ $fighter->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fighter_id5">Fighter pick 5: </label>
            <select name="fighter_id5">
                @foreach ($fighters as $fighter)
                <option value="{{ $fighter->id }}">{{ $fighter->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fighter_id6">Fighter pick 6: </label>
            <select name="fighter_id6">
                @foreach ($fighters as $fighter)
                <option value="{{ $fighter->id }}">{{ $fighter->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fighter_id7">Fighter pick 7: </label>
            <select name="fighter_id7">
                @foreach ($fighters as $fighter)
                <option value="{{ $fighter->id }}">{{ $fighter->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fighter_id8">Fighter pick 8: </label>
            <select name="fighter_id8">
                @foreach ($fighters as $fighter)
                <option value="{{ $fighter->id }}">{{ $fighter->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fighter_id9">Fighter pick 9: </label>
            <select name="fighter_id9">
                @foreach ($fighters as $fighter)
                <option value="{{ $fighter->id }}">{{ $fighter->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fighter_id10">Fighter pick 10: </label>
            <select name="fighter_id10" class="form-select" aria-label="Default select example">
                @foreach ($fighters as $fighter)
                <option value="{{ $fighter->id }}">{{ $fighter->name }}</option>
                @endforeach
            </select>
        </div>


        <a href="{{ route('user.events.show', $event->id) }}" class="btn btn-default">cancel</a>
        <button type="submit" class="btn btn-primary pull-right">Submit</button>



    </form>
</div>
</div>
</div>
</div>








--}}

<div class="row">

    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                {{$event->nameEvent}}: Add new Pick
            </div>


            <div class="panel-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('user.picks.store', $event->id) }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @foreach ($fights as $fight)
                    <div class="form-group">
                        <label for="fighter_id{{ $fight->order }}">Pick your Fighter {{ $fight->order }}: </label>
                        <select name="fighter_id{{ $fight->order }}">

                            <option value="{{ $fight->fighterA->id  }}">{{ $fight->fighterA->name }}</option>
                            <option value="{{ $fight->fighterB->id  }}">{{ $fight->fighterB->name }}</option>

                        </select>
                    </div>
                    @endforeach


                    {{-- <div class="form-group">
                        <label for="fighter_id2">Pick your {{ $fight1->order }} Fighter: </label>
                    <select name="fighter_id2">

                        <option value="{{ $fight1->fighterA->name }}">{{ $fight1->fighterA->name }}</option>
                        <option value="{{ $fight1->fighterB->name }}">{{ $fight1->fighterB->name }}</option>

                    </select>
            </div> --}}


            <a href="{{ route('user.events.show', $event->id) }}" class="btn btn-default">cancel</a>
            <button type="submit" class="btn btn-primary pull-right">Submit</button>



            </form>
        </div>
    </div>
</div>


</div>
</div>
@endsection
@section('footer')
<div class="container-fluid">
    @include('layouts.foot')
</div>
@endsection