@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p id="alert-message" class="alert collapse"></p>

            <div class="card">
                <div class="card-header">
                    Fighters
                </div>






                @if (count($fighters) === 0)
                <p>There are no fighters</p>
                @else
                <div class="container">
                    <div class="row">
                        @foreach ($fighters as $fighter)

                        <div class="col-sm-3 card">





                            <div class="card-body">
                                <a href="productPage.html">
                                    <h6a class="card-title">{{ $fighter->name }}</h6a>
                                </a>
                                <div class="img-container">
                                    <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-08/MIOCIC_STIPE_L_BELT_08-15.png?Ya24dony78mcBWVR2Ms0KFlNMbbuxxZ8&itok=N3WBYnHI"
                                      alt="Card image cap">
                                </div>
                                <br>

                                <h4 style="color:black;">Weight: {{ $fighter->weight }}</h4>
                                <h4 style="color:black;">Record: {{ $fighter->record }}</h4>
                                <h4 style="color:black;">Age: {{ $fighter->age }}</h4>
                                <h4 style="color:black;">Height: {{ $fighter->height }}</h4>





                                <a href="{{ route('user.fighters.show', $fighter->id) }}" class="btn btn-dark">View</a>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
                @endif

                <div class="card-body">
                    @if (count($fighters) === 0)
                    <p>There are no fighters</p>
                    @else
                    <table id="table-fighters" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Height</th>
                            <th>Weight</th>
                            <th>Reach</th>
                            <th>Record</th>
                            <th>Country</th>
                        </thead>
                        <tbody>
                            @foreach ($fighters as $fighter)
                            <tr data-id="{{ $fighter->id }}">
                                <td>{{ $fighter->name }}</td>
                                <td>{{ $fighter->age }}</td>
                                <td>{{ $fighter->height }}</td>
                                <td>{{ $fighter->weight }}</td>
                                <td>{{ $fighter->reach }}</td>
                                <td>{{ $fighter->record }}</td>
                                <td>{{ $fighter->country }}</td>
                                <td>
                                    <a href="{{ route('user.fighters.show', $fighter->id) }}" class="btn btn-primary">View</a>
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