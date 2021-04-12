@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">


        {{-- <div class="col-2" style="padding: 30px 0;">
            <a href="{{ route('admin.events.show', $event->id) }}">
        <div class="img-container">
            <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_results_athlete_headshot/s3/2020-07/USMAN_KAMARU_BELT_12-14.png?NSoAkdZuXUW8AhuE85wvkymyMx1YagsE&itok=RTU-BFyz" alt="Card image cap">
        </div>
        </a>
    </div>
    <div class="col-2" style="padding: 30px 0;">
        <a href="{{ route('admin.events.show', $event->id) }}">
            <div class="img-container">
                <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_results_athlete_headshot/s3/2020-07/MASVIDAL_JORGE_03-16.png?.pzUNaqDSeSW1i7mi2rhuuYoYd1dY6cw&itok=e_K25xuq" alt="Card image cap">
            </div>
        </a>
    </div> --}}






    <div class="col-12">
        <div class="card-body">
            <div class="row">
                <div class="col-2" style="text-align: center; padding: 70px 0;">
                    <a href="{{ route('admin.events.show', $event->id) }}">

                    </a>
                </div>


                <div class="col-2" style="padding: 30px 0;">
                    <a href="{{ route('admin.events.show', $event->id) }}">
                        <div class="img-container">
                            <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_results_athlete_headshot/s3/2020-07/USMAN_KAMARU_BELT_12-14.png?NSoAkdZuXUW8AhuE85wvkymyMx1YagsE&itok=RTU-BFyz" alt="Card image cap">
                        </div>
                    </a>
                </div>


                <br>

                <div class="col-4" style="text-align: center; padding: 30px 0;">


                    <h2a class="card-title">{{ $event->subName }}</h2a>
                    <br>
                    <h6a class="card-title">{{ $event->nameEvent }}</h6a>
                    <h6 style="color:black;">{{ $event->location }}</h6>


                    <h6 style="color:black;">{{ $event->startTime }} / {{ $event->dateEvent }}</h6>


                </div>

                <div class="col-2" style="padding: 30px 0;">
                    <a href="{{ route('admin.events.show', $event->id) }}">
                        <div class="img-container">
                            <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_results_athlete_headshot/s3/2020-07/MASVIDAL_JORGE_03-16.png?.pzUNaqDSeSW1i7mi2rhuuYoYd1dY6cw&itok=e_K25xuq" alt="Card image cap">
                        </div>
                    </a>
                </div>


            </div>


        </div>

        <div>
            {{-- spacer --}}
            <br><br>
        </div>



    </div>










    {{-- <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="card-header">
                Event: {{ $event->name }}
</div>

<div class="card-body">
    <table class="table table-hover">
        <tbody>
            <tr>
                <td>Event Name</td>
                <td>{{ $event->nameEvent }}</td>
            </tr>
            <tr>
                <td>Main Event</td>
                <td>{{ $event->subName }}</td>
            </tr>
            <tr>
                <td>Location</td>
                <td>{{ $event->location }}</td>
            </tr>
            <tr>
                <td>Start Time</td>
                <td>{{ $event->startTime }}</td>
            </tr>
            <tr>
                <td>Date of Event</td>
                <td>{{ $event->dateEvent }}</td>
            </tr>

        </tbody>
    </table>

    <a href="{{ route('user.events.index') }}" class="btn btn-default">Back</a>


</div>
</div>
</div> --}}

<div class="col-12" style="text-align: center; padding: 10px 0;">
    <h6a>MAIN CARD</h6a>
</div>




{{-- FIGHT 1 --}}
<div class="col-12">
    <hr>
    <div class="card-body">
        <div class="row">

            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-07/USMAN_KAMARU_L_BELT_12-14.png?FpNU3NDpXU4IePZMRmuuavs.dOw8Be.9&itok=MG1FCGbr" alt="Card image cap">
                    </div>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Kamru Usman</h6a>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">

            </div>

            <div class="col-4" style="text-align: center; padding: 10px 0;">

                <h6 class="card-title" style="text-align: center; padding: 15px 0" ;>WELTERWEIGHT TITLE BOUT</h6>
                <h4 style=" font-style: bold;">vs</h4>

            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Jorge Masvidal</h6a>
                </a>
            </div>
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-07/MASVIDAL_JORGE_R_03-16.png?yprFrl4Kmku3xV.JHGFWCzDdt8NLud58&itok=seOclNxo" alt="Card image cap">
                    </div>
                </a>
            </div>

            <br>
        </div>

    </div>


    <hr>

</div>







{{-- FIGHT 2 --}}
<div class="col-12">
    <div class="card-body">
        <div class="row">
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-03/WEILI_ZHANG_L_BELT.png?RBXbRqzQF0hQEdiAzt1Tle8X6eWpCZ.1&itok=LCd7x2gX" alt="Card image cap">
                    </div>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Zhang Weili</h6a>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">

            </div>

            <div class="col-4" style="text-align: center; padding: 10px 0;">

                <h6 class="card-title" style="text-align: center; padding: 15px 0" ;>STRAWWEIGHT TITLE BOUT</h6>
                <h4 style=" font-style: bold;">vs</h4>

            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Rose Namajunas</h6a>
                </a>
            </div>
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-07/NAMAJUNAS_ROSE_R_11-04.png?.ITQPy4BQex0Yo_MvJUImGESw7wMxO_w&itok=gAqznuPU" alt="Card image cap">
                    </div>
                </a>
            </div>

            <br>
        </div>

    </div>

    <hr>

</div>





{{-- FIGHT 3 --}}
<div class="col-12">
    <div class="card-body">
        <div class="row">
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-02/SHEVCHENKO_VALENTINA_L_BELT.png?auAU1HqvFlunqB.PVzetwdZAP7FZqSKe&itok=FIi4k3BM" alt="Card image cap">
                    </div>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Valentina Shevchenko</h6a>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">

            </div>

            <div class="col-4" style="text-align: center; padding: 10px 0;">

                <h6 class="card-title" style="text-align: center; padding: 15px 0" ;>WELTERWEIGHT TITLE BOUT</h6>
                <h4 style=" font-style: bold;">vs</h4>

            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Jessica Andrade</h6a>
                </a>
            </div>
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img"
                          src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-10/68243%252Fprofile-galery%252Ffullbodyright-picture%252FANDRADE_JESSICA_R_10-17.png?null&itok=F4wfnIiv"
                          alt="Card image cap">
                    </div>
                </a>
            </div>

            <br>
        </div>

    </div>

    <hr>

</div>




{{-- FIGHT 4 --}}
<div class="col-12">
    <div class="card-body">
        <div class="row">
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-10/69435%252Fprofile-galery%252Ffullbodyleft-picture%252FHALL_URIAH_L_10-31.png?null&itok=0B3T7-KQ"
                          alt="Card image cap">
                    </div>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Uriah Hall</h6a>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">

            </div>

            <div class="col-4" style="text-align: center; padding: 10px 0;">

                <h6 class="card-title" style="text-align: center; padding: 15px 0" ;>WELTERWEIGHT TITLE BOUT</h6>
                <h4 style=" font-style: bold;">vs</h4>

            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Chris Weidman</h6a>
                </a>
            </div>
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img"
                          src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/image/ufc-fighter-container/67613/profile-galery/fullbodyright-picture/WEIDMAN_CHRIS_R.png?SAUt7EbYRGzzZOhN3y9sOvJzMs91kItu&itok=FUc2rm9d"
                          alt="Card image cap">
                    </div>
                </a>
            </div>

            <br>
        </div>

    </div>

    <hr>

</div>



{{-- FIGHT 5 --}}
<div class="col-12">
    <div class="card-body">
        <div class="row">
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-08/SMITH_ANTHONY_L_08-29.png?2.M2KSqwh6ZPd6sn5hgQSLt2Kp6jIY8C&itok=nGvyEBA2" alt="Card image cap">
                    </div>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Anthony Smith</h6a>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">

            </div>

            <div class="col-4" style="text-align: center; padding: 10px 0;">

                <h6 class="card-title" style="text-align: center; padding: 15px 0" ;>WELTERWEIGHT TITLE BOUT</h6>
                <h4 style=" font-style: bold;">vs</h4>

            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Jim Crute</h6a>
                </a>
            </div>
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-10/68255%252Fprofile-galery%252Ffullbodyright-picture%252FCRUTE_JIMMY_R_10-17.png?null&itok=jMCHTawj"
                          alt="Card image cap">
                    </div>
                </a>
            </div>

            <br>
        </div>

    </div>

    <hr>

</div>



<div class="col-12" style="text-align: center;">
    <br>
    <h6a>PRELIMINARY CARD</h6a>
    <br>
    <br>

</div>





{{-- FIGHT 6 --}}
<div class="col-12">
    <hr>
    <div class="card-body">
        <div class="row">

            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2021-02/67204%252Fprofile-galery%252Ffullbodyleft-picture%252FOLIVEIRA_ALEX_L_02-27.png?null&itok=WMh5EjXK"
                          alt="Card image cap">
                    </div>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Alex Oliviera</h6a>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">

            </div>

            <div class="col-4" style="text-align: center; padding: 10px 0;">

                <h6 class="card-title" style="text-align: center; padding: 15px 0" ;>WELTERWEIGHT TITLE BOUT</h6>
                <h4 style=" font-style: bold;">vs</h4>

            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Randy Brown</h6a>
                </a>
            </div>
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2019-06/BROWN_RANDY_R.png?2VIFNOe7PGtEaWuichhkA3px6QGsL5Un&itok=4RHJ41PU" alt="Card image cap">
                    </div>
                </a>
            </div>

            <br>
        </div>

    </div>

    <hr>

</div>


{{-- FIGHT 7 --}}
<div class="col-12">
    <div class="card-body">
        <div class="row">
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-09/GRANT_DWIGHT_L_12-15.png?dL7QhwfQqmJWh95kxf3LHi7Ss14qdaDc&itok=Xv1uYRov" alt="Card image cap">
                    </div>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Dwight Grant</h6a>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">

            </div>

            <div class="col-4" style="text-align: center; padding: 10px 0;">

                <h6 class="card-title" style="text-align: center; padding: 15px 0" ;>WELTERWEIGHT TITLE BOUT</h6>
                <h4 style=" font-style: bold;">vs</h4>

            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Stefan Sekulic</h6a>
                </a>
            </div>
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2018-10/SEKULIC_STEFAN_R.png?3amvoB0905eL5PBYxrheqSDt82I8O54e&itok=HlNfqHma" alt="Card image cap">
                    </div>
                </a>
            </div>

            <br>
        </div>

    </div>

    <hr>

</div>


{{-- FIGHT 8 --}}
<div class="col-12">
    <div class="card-body">
        <div class="row">
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2018-11/ROBERSON_KARL_L_0.png?kubMyyDQInnPBxF548rl2rBtQEAzmRmM&itok=02IRVLEL" alt="Card image cap">
                    </div>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Karl Roberson</h6a>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">

            </div>

            <div class="col-4" style="text-align: center; padding: 10px 0;">

                <h6 class="card-title" style="text-align: center; padding: 15px 0" ;>WELTERWEIGHT TITLE BOUT</h6>
                <h4 style=" font-style: bold;">vs</h4>

            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Brendan Allen</h6a>
                </a>
            </div>
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-11/67501%252Fprofile-galery%252Ffullbodyright-picture%252FALLEN_BRENDAN_R_11-07.png?null&itok=V9bHXWps"
                          alt="Card image cap">
                    </div>
                </a>
            </div>

            <br>
        </div>

    </div>

    <hr>

</div>


{{-- FIGHT 9 --}}
<div class="col-12">
    <div class="card-body">
        <div class="row">
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img"
                          src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/image/ufc-fighter-container/71578/profile-galery/fullbodyleft-picture/BATGEREL_DANAA_L.png?IoFZYQm8xQkfI5T3UwE1uPkTuODtanRO&itok=iebLjWtj"
                          alt="Card image cap">
                    </div>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Danaa Batgerel</h6a>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">

            </div>

            <div class="col-4" style="text-align: center; padding: 10px 0;">

                <h6 class="card-title" style="text-align: center; padding: 15px 0" ;>WELTERWEIGHT TITLE BOUT</h6>
                <h4 style=" font-style: bold;">vs</h4>

            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Kevin Natividad</h6a>
                </a>
            </div>
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-09/NATIVIDAD_KEVIN_R_09-05.png?osQ9FKJB3HrhNXNkSZc_y5z7_yPPbrqy&itok=sm6NU3bi" alt="Card image cap">
                    </div>
                </a>
            </div>

            <br>
        </div>

    </div>

    <hr>

</div>

{{-- FIGHT 10 --}}
<div class="col-12">
    <div class="card-body">
        <div class="row">
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-02/VARGAS_KAZULA_L.png?null&itok=Jq2XEmBE" alt="Card image cap">
                    </div>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Kazula Vargas</h6a>
                </a>
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">

            </div>

            <div class="col-4" style="text-align: center; padding: 10px 0;">

                <h6 class="card-title" style="text-align: center; padding: 15px 0" ;>WELTERWEIGHT TITLE BOUT</h6>
                <h4 style=" font-style: bold;">vs</h4>

            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
            </div>
            <div class="col-1" style="text-align: center; padding: 10px 0;">
                <a href="{{ route('user.fighters.index') }}">
                    <h6a class="card-title">Jeffrey Molina</h6a>
                </a>
            </div>
            <div class="col-2" style="padding: 10px 0;">
                <a href="{{ route('admin.events.show', $event->id) }}">
                    <div class="img-container2">
                        <img class="img" src="https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2020-09/MOLINA_JEFFREY_R.png?wqJcL9eMpyGvGzsXiRmmvXkBm0.JSzZy&itok=dT4By22m" alt="Card image cap">
                    </div>
                </a>
            </div>

            <br>
        </div>

    </div>

    <hr>

</div>





</div>
</div>


@endsection
@section('footer')
<div class="container-fluid">
    @include('layouts.foot')
</div>
@endsection