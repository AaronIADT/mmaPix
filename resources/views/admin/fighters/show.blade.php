@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Book: {{ $fighter->name }}
          </div>

          <div class="card-body">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td>Name</td>
                  <td>{{ $fighter->name }}</td>
                </tr>
                <tr>
                  <td>Age</td>
                  <td>{{ $fighter->age }}</td>
                </tr>
                <tr>
                  <td>Height</td>
                  <td>{{ $fighter->height }}</td>
                </tr>
                <tr>
                  <td>Weight</td>
                  <td>{{ $fighter->weight }}</td>
                </tr>
                <tr>
                  <td>Reach</td>
                  <td>{{ $fighter->reach }}</td>
                </tr>
                <tr>
                  <td>Record</td>
                  <td>{{ $fighter->record }}</td>
                </tr>
                <tr>
                  <td>Country</td>
                  <td>{{ $fighter->country }}</td>
                </tr>


              </tbody>
            </table>

            <a href="{{ route('admin.fighters.index') }}" class="btn btn-default">Back</a>
            <a href="{{ route('admin.fighters.edit', $fighter->id) }}" class="btn btn-warning">Edit</a>
            <form style="display:inline-block" method="POST" action="{{  route('admin.fighters.destroy', $fighter->id)  }}">
              <input type="hidden" name="method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="form-control btn btn-danger">Delete</a>
              </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
