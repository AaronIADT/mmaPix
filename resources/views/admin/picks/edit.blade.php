@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Edit Event
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
                    <form method="POST" action="{{ route('admin.events.update', $event->id) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label for="title">Name Event</label>
                            <input type="text" class="form-control" id="nameEvent" name="nameEvent" value="{{ old('nameEvent', $event->nameEvent) }}" />
                        </div>
                        <div class="form-group">
                            <label for="title">Main Event</label>
                            <input type="text" class="form-control" id="subName" name="subName" value="{{ old('subName', $event->subName) }}" />
                        </div>
                        <div class="form-group">
                            <label for="title">Location</label>
                            <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $event->location) }}" />
                        </div>
                        <div class="form-group">
                            <label for="title">Start time</label>
                            <input type="text" class="form-control" id="startTime" name="startTime" value="{{ old('startTime', $event->startTime) }}" />
                        </div>
                        <div class="form-group">
                            <label for="title">Date of Event</label>
                            <input type="text" class="form-control" id="dateEvent" name="dateEvent" value="{{ old('dateEvent', $event->dateEvent) }}" />
                        </div>
                        <div class="form-group">
                            <label for="title">Event Pic link</label>
                            <input type="text" class="form-control" id="pictureEvent" name="pictureEvent" value="{{ old('pictureEvent', $event->pictureEvent) }}" />
                        </div>
                        <div class="form-group">
                            <label for="title">Logo pic link</label>
                            <input type="text" class="form-control" id="logoEvent" name="logoEvent" value="{{ old('logoEvent', $event->logoEvent) }}" />
                        </div>
                        <div class="float-right">
                            <a href="{{ route('admin.events.index') }}" class="btn btn-default">Cancel</a>
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