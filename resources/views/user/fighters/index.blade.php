@extends('layouts.appUser')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 test" style="text-align: center;">
            <p id="alert-message" class="alert collapse"></p>
            <div class="card test">
                <div class="card-header test">
                    <h2a style="text-align: center;">Fighters</h2a>
                </div>



                <br>


                @if (count($fighters) === 0)
                <p>There are no fighters</p>
                @else
                <div class="container">
                    <div class="row">
                        @foreach ($fighters as $fighter)
                        <a style="display: block;" href="{{ route('user.fighters.show', $fighter->id) }}">
                            <div class="col-sm-3 card test">





                                <div class="card-body card1 test">
                                    <div class="textContain">
                                        <a href="{{ route('user.fighters.show', $fighter->id) }}">
                                            <h6a class="card-title nameTextAdjust">{{ $fighter->name }}</h6a>
                                        </a>
                                    </div>
                                    <div class="img-container">
                                        <a href="{{ route('user.fighters.show', $fighter->id) }}">
                                            <img class="img" width="10%" height="10%" src="{{ $fighter->picfighter }}" alt="Card image cap">

                                        </a>

                                    </div>

                                    <div style="text-align: center; padding-top: 10px;">

                                        @if ($fighter->weight == "115 lbs")
                                        <h7b>Strawweight</h7b>

                                        @elseif ($fighter->weight == "125 lbs")
                                        <h7b>Flyweight</h7b>

                                        @elseif ($fighter->weight == "135 lbs")
                                        <h7b>Bantamweight</h7b>

                                        @elseif ($fighter->weight == "145 lbs")
                                        <h7b>Featherweight</h7b>

                                        @elseif ($fighter->weight == "155 lbs")
                                        <h7b>Lightweight</h7b>

                                        @elseif ($fighter->weight == "170 lbs")
                                        <h7b>Welterweight</h7b>

                                        @elseif ($fighter->weight == "185 lbs")
                                        <h7b>Middleweight</h7b>

                                        @elseif ($fighter->weight == "205 lbs")
                                        <h7b>Light Heavyweight</h7b>

                                        @else
                                        <h7b>Heavyweight</h7b>
                                        @endif

                                        <br>
                                        <h7b>{{ $fighter->record }}</h7b>

                                    </div>




                                </div>
                            </div>
                        </a>


                        @endforeach
                    </div>

                </div>
                <div class="col-4 offset-md-4">
                    <br>
                    {{ $fighters->links("pagination::bootstrap-4") }}

                </div>
                @endif

                {{-- <div class="card-body">
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
            </div> --}}
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