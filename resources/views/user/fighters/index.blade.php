@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <p id="alert-message" class="alert collapse"></p>

        <div class="card">
          <div class="card-header">
              Fighters
          </div>

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
                                  <a href="{{ route('user.fighters.show', $fighter->id) }}" class="btn btn-primary">View</a>
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
