@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
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