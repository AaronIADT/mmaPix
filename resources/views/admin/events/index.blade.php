@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{-- <div class="col-md-12">
            <p id="alert-message" class="alert collapse"></p>

            <div class="card">
                <div class="card-header">
                    Events
                    <a href="{{ route('admin.events.create') }}" class="btn btn-primary float-right">Add</a>
    </div>

    <div class="card-body">
        @if (count($events) === 0)
        <p>There are no events</p>
        @else
        <table id="table-events" class="table table-hover">
            <thead>
                <th>Event Name</th>
                <th>Main Event</th>
                <th>Location</th>
                <th>Start Time</th>
                <th>Date Of Event</th>
                <th>PictureLink1</th>
                <th>PictureLink2</th>
            </thead>
            <tbody>
                @foreach ($events as $event)
                <tr data-id="{{ $event->id }}">
                    <td>{{ $event->nameEvent }}</td>
                    <td>{{ $event->subName }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ $event->startTime }}</td>
                    <td>{{ $event->dateEvent }}</td>
                    <td>{{ $event->pictureEvent }}</td>
                    <td>{{ $event->logoEvent }}</td>
                    <td>
                        <a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                        <form style="display:inline-block" method="POST" action="{{ route('admin.events.destroy', $event->id) }}">
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
</div>
</div> --}}







@foreach ($events as $event)


<div class="col-12">
    <div class="card-body">
        <div class="row">
            <div class="col-2" style="text-align: center; padding: 70px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <h6a class="card-title">{{ $event->subName }}</h6a>
                </a>
            </div>
            {{-- <div class="col-4">
                        <a href="{{ route('admin.events.show', $event->id) }}">
            <div class="img-container">
                <img class="img" src="{{ $event->pictureEvent }}" alt="Card image cap">
            </div>
            </a>
        </div> --}}

        <div class="col-2" style="padding: 30px 0;">
            <a href="{{ route('admin.events.show', $event->id) }}">
                <div class="img-container">
                    <img class="img" src="{{ $event->pictureEvent }}" alt="Card image cap">
                </div>
            </a>
        </div>
        <div class="col-2" style="padding: 30px 0;">
            <a href="{{ route('admin.events.show', $event->id) }}">
                <div class="img-container">
                    <img class="img" src="{{ $event->logoEvent }}" alt="Card image cap">
                </div>
            </a>
        </div>

        <br>

        <div class="col-4" style="text-align: center; padding: 30px 0;">

            <h6a class="card-title">{{ $event->nameEvent }}</h6a>
            <h6 style="color:black;">{{ $event->location }}</h6>


            <h6 style="color:black;">{{ $event->startTime }} / {{ $event->dateEvent }}</h6>


        </div>
    </div>


</div>

<div>
    {{-- spacer --}}
    <br><br>
</div>


<div class="bottomTest2">
    <a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-dark">View</a>
    <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-outline-dark">Edit</a>
    <form style="display:inline-block" method="POST" action="{{ route('admin.events.destroy', $event->id) }}">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="form-control btn btn-danger">Delete</button>
    </form>
</div>
</div>



</div>

@endforeach


<div class="col-md-12">
    <p id="alert-message" class="alert collapse"></p>

    <div class="card">
        <div class="card-header">
            Events
            <a href="{{ route('admin.events.create') }}" class="btn btn-primary float-right">Add</a>
        </div>

        <div class="card-body">
            @if (count($events) === 0)
            <p>There are no events</p>
            @else
            <table id="table-events" class="table table-hover">
                <thead>
                    <th>Event Name</th>
                    <th>Main Event</th>
                    <th>Location</th>
                    <th>Start Time</th>
                    <th>Date Of Event</th>
                    <th>PictureLink1</th>
                    <th>PictureLink2</th>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                    <tr data-id="{{ $event->id }}">
                        <td>{{ $event->nameEvent }}</td>
                        <td>{{ $event->subName }}</td>
                        <td>{{ $event->location }}</td>
                        <td>{{ $event->startTime }}</td>
                        <td>{{ $event->dateEvent }}</td>
                        <td>{{ $event->pictureEvent }}</td>
                        <td>{{ $event->logoEvent }}</td>
                        <td>
                            <a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
                            <form style="display:inline-block" method="POST" action="{{ route('admin.events.destroy', $event->id) }}">
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