@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
            Fighter: {{ $fighter->name }}
        </div>

        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                    <tr>
                          <td>Title</td>
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

            <a href="{{ route('user.books.index') }}" class="btn btn-default">Back</a>


        </div>
      </div>
    </div>
  </div>
</div>
@endsection
