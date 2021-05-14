@extends('layouts.app')

@section('content')
<div class="container">


    <div class="col-md-12" style="text-align: center;">

        <h2a style="text-align:center;">{{ $event->subName }} - {{ $event->nameEvent }}</h2a>

    </div>

    <div class="col-md-4 offset-md-4" style="text-align: center;">

        <h7a style="color:black;">{{ $event->startTime }} / {{ $event->dateEvent }}</h7a>
        <h6 style="color:black;">{{ $event->location }}</h6>

        <br>
        <br>
        <br>
    </div>

    <div class="row">



        <div class="card">




            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                </ul>
            </div>
            @endif
            <form method="POST" action="{{ route('admin.picks.store', $event->id) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @foreach ($fights as $fight)

                {{-- <div class="form-group">

                      <label for="fighter_id{{ $fight->order }}">Pick your Fighter {{ $fight->order }}: </label>
                <select name="fighter_id{{ $fight->order }}">

                    <option type="radio" value="{{ $fight->fighterA->id  }}">{{ $fight->fighterA->name }}</option>
                    <option type="radio" value="{{ $fight->fighterB->id  }}">{{ $fight->fighterB->name }}</option>

                </select>
                {{-- <div class="btn-group btn-group-toggle" data-toggle="buttons">
                          <label class="btn btn-secondary active">
                              <input type="radio" name="fighter_id{{ $fight->order }}" id="option1" value="{{ $fight->fighterA->id  }}" autocomplete="off" checked>{{ $fight->fighterA->name }}
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="fighter_id{{ $fight->order }}" id="option2" value="{{ $fight->fighterB->id  }}" autocomplete="off">{{ $fight->fighterB->name }}
                </label>
        </div>
    </div> --}}


    <div class="col-12">
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

                <div class="col-2" style="text-align: center; padding: 10px 0;">
                    <br>
                    <a href="{{ route('admin.fighters.index') }}">
                        <h6b class="card-title">{{ $fight->fighterA->name}}</h6b>
                    </a>

                </div>



                <div class="col-4" style="text-align: center; padding: 10px 0;">

                    <h6 class="card-title weightText" style="text-align: center; padding: 15px 0" ;>{{ $fight->weightClass}}</h6>
                    <h4 class="VSText" style=" font-style: bold;">- vs -</h4>
                    <br>
                    <div class="form-group">

                        {{-- <label for="fighter_id{{ $fight->order }}">Pick your Fighter: </label> --}}
                        <h7c>Pick your Fighter: </h7c>
                        <br>
                        <select class="dropdownText" name="fighter_id{{ $fight->order }}">

                            <option class="dropdownText" type="radio" value="{{ $fight->fighterA->id  }}">{{ $fight->fighterA->name }}</option>
                            <option class="dropdownText" type="radio" value="{{ $fight->fighterB->id  }}">{{ $fight->fighterB->name }}</option>

                        </select>
                    </div>
                </div>




                <div class="col-2" style="text-align: center; padding: 10px 0;">
                    <br>
                    <a href="{{ route('admin.fighters.index') }}">
                        <h6b class="card-title">{{ $fight->fighterB->name}}</h6b>
                    </a>
                </div>

                <div class="col-2" style="padding: 10px 0;">
                    <br>
                    <a href="{{ route('admin.events.show', $event->id) }}">
                        <div class="img-container2">
                            <img class="img" src="{{ $fight->fighterB->picfighter}}" alt="Card image cap">
                        </div>
                    </a>
                </div>

                <br>
            </div>

        </div>




    </div>
    <div class="col-12">
        <hr>
    </div>

    @endforeach


    {{-- <div class="form-group">
                      <label for="fighter_id2">Pick your {{ $fight1->order }} Fighter: </label>
    <select name="fighter_id2">

        <option value="{{ $fight1->fighterA->name }}">{{ $fight1->fighterA->name }}</option>
        <option value="{{ $fight1->fighterB->name }}">{{ $fight1->fighterB->name }}</option>

    </select>
</div> --}}


<a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-default">cancel</a>
<button type="submit" class="btn btn-primary pull-right">Submit</button>



</form>

</div>










{{-- <div class="col-md-8 col-md-offset-2">
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
    <form method="POST" action="{{ route('admin.picks.store', $event->id) }}">
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
            <select name="fighter_id10">
                @foreach ($fighters as $fighter)
                <option value="{{ $fighter->id }}">{{ $fighter->name }}</option>
                @endforeach
            </select>
        </div>


        <a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-default">cancel</a>
        <button type="submit" class="btn btn-primary pull-right">Submit</button>



    </form>
</div>
</div>
</div> --}}
</div>
</div>
@endsection
@section('footer')
<div class="container-fluid">
    @include('layouts.foot')
</div>
@endsection