@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p id="alert-message" class="alert collapse"></p>

            <div class="card">
                <div class="card-header">
                    <h6a style="font-size: 40px;">Fighters</h6a>
                    <a href="{{ route('admin.fighters.create') }}" class="btn btn-primary float-right">Add</a>
                </div>






                @if (count($fighters) === 0)
                <p>There are no fighters</p>
                @else
                <div class="container">
                    <div class="row">
                        @foreach ($fighters as $fighter)

                        <div class="col-sm-4 card">

                            <div class="card-body">
                                <a href="{{ route('admin.fighters.show', $fighter->id) }}">
                                    <h6a class="card-title">{{ $fighter->name }}</h6a>
                                </a>
                                <div class="img-container">
                                    <img class="img" src="{{ $fighter->picfighter }}" alt="Card image cap">
                                </div>
                                <br>

                                <h6 style="color:black;">Weight: {{ $fighter->weight }}</h6>
                                <h6 style="color:black;">Record: {{ $fighter->record }}</h6>
                                <h6 style="color:black;">Age: {{ $fighter->age }}</h6>
                                <h6 style="color:black;">Height: {{ $fighter->height }}</h6>

                                <div>
                                    {{-- spacer --}}
                                    <br><br>
                                </div>


                                <div class="bottomTest">
                                    <a href="{{ route('admin.fighters.show', $fighter->id) }}" class="btn btn-dark">View</a>
                                    <a href="{{ route('admin.fighters.edit', $fighter->id) }}" class="btn btn-outline-dark">Edit</a>
                                    <form style="display:inline-block" method="POST" action="{{ route('admin.fighters.destroy', $fighter->id) }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="form-control btn btn-danger">Delete</button>
                                    </form>
                                </div>
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
                                    <a href="{{ route('admin.fighters.show', $fighter->id) }}" class="btn btn btn-dark">View</a>
                                    <a href="{{ route('admin.fighters.edit', $fighter->id) }}" class="btn btn-outline-dark">Edit</a>
                                    <form style="display:inline-block" method="POST" action="{{ route('admin.fighters.destroy', $fighter->id) }}">
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