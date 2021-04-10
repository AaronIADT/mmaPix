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
        $event->pictureEvent = 'https://dmxg5wxfqgb4u.cloudfront.net/image/2021-03/1134034633_261_BoutAnn_KU-JM_1200x675_Eng.jpg?null=';
        $event->logoEvent = 'test';
        $event->save();

        $event = new Event();
        $event->nameEvent = 'VETTORI VS HOLLAND';
        $event->subName = 'UFC 262';
        $event->location = 'America';
        $event->startTime = '3:00 AM IST';
        $event->dateEvent = 'Sun, Apr 25';
        $event->pictureEvent = 'https://dmxg5wxfqgb4u.cloudfront.net/image/2021-03/1134034633_261_BoutAnn_KU-JM_1200x675_Eng.jpg?null=';
        $event->logoEvent = 'test';
        $event->save();



      }

}
