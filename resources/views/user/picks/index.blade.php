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

@if (count($picks) === 0)
<p>There are no picks</p>
@else


@foreach ($picks as $pick)
<hr>
<h6a>Your Picks</h6a>
<h6a>{{ $pick->event->subName }} - {{ $pick->event->nameEvent }}</h6a>
<div class="row">

    <div class="col-2">
        <br>
        <h3>Pick 1:</h3>
        <h3>{{ $pick->pick1->name }}</h3>
        <br>
        <div class="img-container2">
            <img class="img" src="{{ $pick->pick1->picfighter }}">
        </div>
        <br>
    </div>

    <div class="col-2">
        <br>
        <h3>Pick 2:</h3>
        <h3>{{ $pick->pick2->name }}</h3>
        <br>
        <div class="img-container2">
            <img class="img" src="{{ $pick->pick2->picfighter }}">
        </div>
        <br>
    </div>

    <div class="col-2">
        <br>
        <h3>Pick 3:</h3>
        <h3>{{ $pick->pick3->name }}</h3>
        <br>
        <div class="img-container2">
            <img class="img" src="{{ $pick->pick3->picfighter }}">
        </div>
        <br>
    </div>

    <div class="col-2">
        <br>
        <h3>Pick 4:</h3>
        <h3>{{ $pick->pick4->name }}</h3>
        <br>
        <div class="img-container2">
            <img class="img" src="{{ $pick->pick4->picfighter }}">
        </div>
        <br>
    </div>

    <div class="col-2">
        <br>
        <h3>Pick 5:</h3>
        <h3>{{ $pick->pick5->name }}</h3>
        <br>
        <div class="img-container2">
            <img class="img" src="{{ $pick->pick5->picfighter }}">
        </div>
        <br>
    </div>

    <div class="col-2">
        <br>
        <h3>Pick 6:</h3>
        <h3>{{ $pick->pick6->name }}</h3>
        <br>
        <div class="img-container2">
            <img class="img" src="{{ $pick->pick6->picfighter }}">
        </div>
        <br>
    </div>

    <div class="col-2">
        <br>
        <h3>Pick 7:</h3>
        <h3>{{ $pick->pick7->name }}</h3>
        <br>
        <div class="img-container2">
            <img class="img" src="{{ $pick->pick7->picfighter }}">
        </div>
        <br>
    </div>

    <div class="col-2">
        <br>
        <h3>Pick 8:</h3>
        <h3>{{ $pick->pick8->name }}</h3>
        <br>
        <div class="img-container2">
            <img class="img" src="{{ $pick->pick8->picfighter }}">
        </div>
        <br>
    </div>

    <div class="col-2">
        <br>
        <h3>Pick 9:</h3>
        <h3>{{ $pick->pick9->name }}</h3>
        <br>
        <div class="img-container2">
            <img class="img" src="{{ $pick->pick9->picfighter }}">
        </div>
        <br>
    </div>

    <div class="col-2">
        <br>
        <h3>Pick 10:</h3>
        <h3>{{ $pick->pick10->name }}</h3>
        <br>
        <div class="img-container2">
            <img class="img" src="{{ $pick->pick10->picfighter }}">
        </div>
        <br>
    </div>




</div>
@endforeach


@endif

</div>
</div>
</div>
@endsection
@section('footer')
<div class="container-fluid">
    @include('layouts.foot')
</div>
@endsection