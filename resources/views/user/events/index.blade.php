@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p id="alert-message" class="alert collapse"></p>

            {{-- <div class="card">
                <div class="card-header">
                    Events
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
                <a href="{{ route('user.events.show', $event->id) }}" class="btn btn-primary">View</a>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            @endif
        </div>
    </div> --}}
</div>


@foreach ($events as $event)


<div class="col-12">
    <div class="card-body">
        <div class="row">
            <div class="col-2" style="text-align: center; padding: 70px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <h6a class="card-title">{{ $event->subName }}</h6a>
                </a>
            </div>


            <div class="col-2" style="padding: 30px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_results_athlete_headshot/s3/2020-07/USMAN_KAMARU_BELT_12-14.png?NSoAkdZuXUW8AhuE85wvkymyMx1YagsE&itok=RTU-BFyz" alt="Card image cap">
                    </div>
                </a>
            </div>
            <div class="col-2" style="padding: 30px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_results_athlete_headshot/s3/2020-07/MASVIDAL_JORGE_03-16.png?.pzUNaqDSeSW1i7mi2rhuuYoYd1dY6cw&itok=e_K25xuq" alt="Card image cap">
                    </div>
                </a>
            </div>

            <br>

            <div class="col-4" style="text-align: center; padding: 30px 0;">

                <h6a class="card-title">{{ $event->nameEvent }}</h6a>
                <h6 style="color:black;">{{ $event->location }}</h6>


                <h6 style="color:black;">{{ $event->startTime }} / {{ $event->dateEvent }}</h6>


            </div>

            <div class="col-2">
                <div style="text-align: center; padding: 70px 0;">
                    <a href="{{ route('user.events.show', $event->id) }}" class="btn btn-dark">View</a>

                </div>
            </div>
        </div>


    </div>

    <div>
        {{-- spacer --}}
        <br><br>
    </div>



</div>




</div>
<hr>
@endforeach
</div>
</div>
@endsection
@section('footer')
<div class="container-fluid">
    @include('layouts.foot')
</div>
@endsection