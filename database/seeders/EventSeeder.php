<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      public function run()
      {
        $event = new Event();
        $event->nameEvent = 'Usman VS Masvidal';
        $event->subName = 'UFC 261';
        $event->location = 'VyStar Veterans Memorial Arena Jacksonville, FL United States';
        $event->startTime = '3:00 AM IST';
        $event->dateEvent = 'Sun, Apr 25';
        $event->pictureEvent = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/event_results_athlete_headshot/s3/2020-07/USMAN_KAMARU_BELT_12-14.png?NSoAkdZuXUW8AhuE85wvkymyMx1YagsE&itok=RTU-BFyz';
        $event->logoEvent = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/event_results_athlete_headshot/s3/2020-07/MASVIDAL_JORGE_03-16.png?.pzUNaqDSeSW1i7mi2rhuuYoYd1dY6cw&itok=e_K25xuq';
        $event->save();

        $event = new Event();
        $event->nameEvent = 'REYES VS PROCHAZKA';
        $event->subName = 'FN 125';
        $event->location = 'America';
        $event->startTime = '3:00 AM IST';
        $event->dateEvent = 'Sun, May 2';
        $event->pictureEvent = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/event_results_athlete_headshot/s3/2020-09/REYES_DOMINICK_10-18.png?BEYF1Pv4vI4XHTgspkinkDhFrMYipA9n&itok=CBWJbyHR';
        $event->logoEvent = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/event_results_athlete_headshot/s3/2020-07/PROCHAZKA_JIRI_07-11.png?Ja1Tl7uwpxCxlbZDUPTg9eZ_cbVJA5Iy&itok=LrP-FaHm';
        $event->save();



      }

}
