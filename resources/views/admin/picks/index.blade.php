@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p id="alert-message" class="alert collapse"></p>

            <div class="card">
                <div class="card-header">
                    Events
                    <a href="{{ route('admin.picks.create') }}" class="btn btn-primary float-right">Add</a>
                </div>

                <div class="card-body">
                    @if (count($picks) === 0)
                    <p>There are no events</p>
                    @else
                    <table id="table-picks" class="table table-hover">
                        <thead>
                            <th>Event Name</th>
                            <th>Fight 1:</th>
                            <th>Fight 2:</th>
                            <th>Fight 3:</th>
                            <th>Fight 4:</th>
                            <th>Fight 5:</th>
                            <th>Fight 6:</th>
                            <th>Fight 7:</th>
                            <th>Fight 8:</th>
                            <th>Fight 9:</th>
                            <th>Fight 10:</th>
                        </thead>
                        <tbody>
                            @foreach ($picks as $pick)
                            <tr data-id="{{ $pick->id }}">
                                <td>TEST EVENT</td>
                                <td>{{ $pick->fight1 }}</td>
                                <td>{{ $pick->fight2 }}</td>
                                <td>{{ $pick->fight3 }}</td>
                                <td>{{ $pick->fight4 }}</td>
                                <td>{{ $pick->fight5 }}</td>
                                <td>{{ $pick->fight6 }}</td>
                                <td>{{ $pick->fight7 }}</td>
                                <td>{{ $pick->fight8 }}</td>
                                <td>{{ $pick->fight9 }}</td>
                                <td>{{ $pick->fight10 }}</td>

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
        </div>
    </div>
</div>
@endsection
@section('footer')
<div class="container-fluid">
    @include('layouts.foot')
</div>
@endsection