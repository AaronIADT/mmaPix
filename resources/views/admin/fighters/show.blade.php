@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-4">
            <div class="card">
                <div>
                    <img class="img" src="{{ $fighter->picfighter }}" alt="Card image cap">
                </div>
            </div>
        </div>
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <h6a>{{ $fighter->name }}</h6a>
                </div>


                <div class="card-body">


                    <div class="row">
                        <div class="col-3">
                            <h5a>Age:</h5a>
                        </div>
                        <div class="col-8" style=" padding-top: 10px">
                            <h5>{{ $fighter->age }}</h5>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-3">
                            <h5a>Height:</h5a>
                        </div>
                        <div class="col-8" style=" padding-top: 10px">
                            <h5>{{ $fighter->height }}</h5>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-3">
                            <h5a>Weight:</h5a>
                        </div>
                        <div class="col-8" style=" padding-top: 10px">
                            <h5>{{ $fighter->weight }}</h5>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-3">
                            <h5a>Reach:</h5a>
                        </div>
                        <div class="col-8" style=" padding-top: 10px">
                            <h5>{{ $fighter->reach }}</h5>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-3">
                            <h5a>Record:</h5a>
                        </div>
                        <div class="col-8" style=" padding-top: 10px">
                            <h5>{{ $fighter->record }}</h5>
                        </div>

                    </div>
                    {{-- <table class="table table-hover">
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
                    </table> --}}


                    <div class="row">
                        <div class="col-3">
                            <h5a>STANDING: </h5a>
                        </div>
                        <div class="col-8" style=" padding-top: 10px">
                            <div class="progress mb-3" style="height: 10px">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <h5a>CLINCH: </h5a>
                        </div>
                        <div class="col-8" style=" padding-top: 10px">
                            <div class="progress mb-3" style="height: 10px">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3">
                            <h5a>GROUND: </h5a>
                        </div>
                        <div class="col-8" style=" padding-top: 10px">
                            <div class="progress mb-3" style="height: 10px">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>


                    <br>
                    <br>
                    <br>
                    <br>



                </div>
            </div>



        </div>
    </div>
    <div class="col-3 offset-10">
        <a href="{{ route('admin.fighters.index') }}" class="btn btn-dark">Back</a>
        <a href="{{ route('admin.fighters.edit', $fighter->id) }}" class="btn btn-outline-secondary">Edit</a>
        <form style="display:inline-block" method="POST" action="{{  route('admin.fighters.destroy', $fighter->id)  }}">
            <input type="hidden" name="method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="form-control btn btn-danger">Delete</a>
        </form>
    </div>

</div>
@endsection
@section('footer')
<div class="container-fluid">
    @include('layouts.foot')
</div>
@endsection