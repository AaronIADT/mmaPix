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
        $event->nameEvent = 'Oliviera VS Chandler';
        $event->subName = 'UFC 262';
        $event->location = 'Toyota Center Houston, TX United States';
        $event->startTime = '3:00 AM IST';
        $event->dateEvent = 'Sun, May 16';
        $event->pictureEvent = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/event_results_athlete_headshot/s3/2020-02/OLIVEIRA_CHARLES.png?cLp_SCRpQfDLKdCBI8pTkYqQu3lA7N1U&itok=bxIVK6Ht';
        $event->logoEvent = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/event_results_athlete_headshot/s3/2020-12/CHANDLER_MICHAEL_10-24.png?null&itok=UKi38_g6';
        $event->save();



      }

}
