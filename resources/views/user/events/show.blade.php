@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Event: {{ $event->name }}
                </div>

                <div class="card-body">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>Event Name</td>
                                <td>{{ $event->nameEvent }}</td>
                            </tr>
                            <tr>
                                <td>Main Event</td>
                                <td>{{ $event->subName }}</td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td>{{ $event->location }}</td>
                            </tr>
                            <tr>
                                <td>Start Time</td>
                                <td>{{ $event->startTime }}</td>
                            </tr>
                            <tr>
                                <td>Date of Event</td>
                                <td>{{ $event->dateEvent }}</td>
                            </tr>
                            <tr>
                                <td>PictureLink1</td>
                                <td>{{ $event->pictureEvent }}</td>
                            </tr>
                            <tr>
                                <td>PictureLink2</td>
                                <td>{{ $event->logoEvent }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="{{ route('user.events.index') }}" class="btn btn-default">Back</a>


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