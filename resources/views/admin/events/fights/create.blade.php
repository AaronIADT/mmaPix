@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    {{$event->nameEvent}}: Add new fight
                </div>


                <div class="panel-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('admin.fights.store', $event->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="fighter_id_1">Fighter 1</label>
                            <select name="fighter_id_1">
                                @foreach ($fighters as $fighter)
                                <option value="{{ $fighter->id }}">{{ $fighter->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="fighter_id_2">Fighter 2</label>
                            <select name="fighter_id_2">
                                @foreach ($fighters as $fighter)
                                <option value="{{ $fighter->id }}">{{ $fighter->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="order">Order</label>
                            <input type="text" class="form-control" id="order" name="order" value="{{ old('order') }}" />
                        </div>

                        <a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-default">cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>



                    </form>
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