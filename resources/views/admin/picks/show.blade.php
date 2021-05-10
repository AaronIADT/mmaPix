@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Pick: {{ $pick->userTag }}
                </div>

                <div class="card-body">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>Event Name</td>
                                <td>TEST UFC EVENT</td>
                            </tr>
                            <tr>
                                <td>Fight 1:</td>
                                <td>{{ $pick->fighter_id1 }}</td>
                            </tr>
                            <tr>
                                <td>Fight 2:</td>
                                <td>{{ $pick->fighter_id2 }}</td>
                            </tr>
                            <tr>
                                <td>Fight 3:</td>
                                <td>{{ $pick->fighter_id3 }}</td>
                            </tr>
                            <tr>
                                <td>Fight 4:</td>
                                <td>{{ $pick->fighter_id4 }}</td>
                            </tr>
                            <tr>
                                <td>Fight 5:</td>
                                <td>{{ $pick->fighter_id5 }}</td>
                            </tr>
                            <tr>
                                <td>Fight 6:</td>
                                <td>{{ $pick->fighter_id6 }}</td>
                            </tr>
                            <tr>
                                <td>Fight 7:</td>
                                <td>{{ $pick->fighter_id7 }}</td>
                            </tr>
                            <tr>
                                <td>Fight 8:</td>
                                <td>{{ $pick->fighter_id8 }}</td>
                            </tr>
                            <tr>
                                <td>Fight 9:</td>
                                <td>{{ $pick->fighter_id9 }}</td>
                            </tr>
                            <tr>
                                <td>Fight 10:</td>
                                <td>{{ $pick->fighter_id10 }}</td>
                            </tr>



                        </tbody>
                    </table>

                    <a href="{{ route('admin.picks.index') }}" class="btn btn-default">Back</a>
                    <a href="{{ route('admin.picks.edit', $pick->id) }}" class="btn btn-warning">Edit</a>
                    {{-- <form style="display:inline-block" method="POST" action="{{  route('admin.events.destroy', $event->id)  }}">
                    <input type="hidden" name="method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="form-control btn btn-danger">Delete</a>
                        </form> --}}

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