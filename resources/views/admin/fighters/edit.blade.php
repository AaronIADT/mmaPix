@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Edit Fighter
                </div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('admin.fighters.update', $fighter->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $fighter->name) }}" />
                        </div>
                        <div class="form-group">
                            <label for="title">Age</label>
                            <input type="text" class="form-control" id="age" name="age" value="{{ old('age', $fighter->age) }}" />
                        </div>
                        <div class="form-group">
                            <label for="title">Height</label>
                            <input type="text" class="form-control" id="height" name="height" value="{{ old('height', $fighter->height) }}" />
                        </div>
                        <div class="form-group">
                            <label for="title">Weight</label>
                            <input type="text" class="form-control" id="weight" name="weight" value="{{ old('weight', $fighter->weight) }}" />
                        </div>
                        <div class="form-group">
                            <label for="title">Reach</label>
                            <input type="text" class="form-control" id="reach" name="reach" value="{{ old('reach', $fighter->reach) }}" />
                        </div>
                        <div class="form-group">
                            <label for="title">Record</label>
                            <input type="text" class="form-control" id="record" name="record" value="{{ old('record', $fighter->record) }}" />
                        </div>
                        <div class="form-group">
                            <label for="title">Country</label>
                            <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $fighter->country) }}" />
                        </div>
                        <div class="float-right">
                            <a href="{{ route('admin.fighters.index') }}" class="btn btn-default">Cancel</a>
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
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