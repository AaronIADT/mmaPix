@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p id="alert-message" class="alert collapse"></p>

            <div class="card">
                <div class="card-header">
                    Picks
                    {{-- <a href="{{ route('admin.picks.create') }}" class="btn btn-primary float-right">Add</a> --}}
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
            </div>



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






</div>
</div>
</div>
@endsection
@section('footer')
<div class="container-fluid">
    @include('layouts.foot')
</div>
@endsection