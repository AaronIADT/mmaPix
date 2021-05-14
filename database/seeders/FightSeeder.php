<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fight;
use App\Models\Fighter;
use App\Models\Event;

class FightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public function run()
     {
       $event261 = Event::where('nameEvent', "Usman VS Masvidal")->first();
       $fighter1 = Fighter::where('name', "Jorge Masvidal")->first();
       $fighter2 = Fighter::where('name', "Kamaru Usman")->first();

       $fight = new Fight();
       $fight->event_id = $event261->id;
       $fight->fighter_id_1 = $fighter1->id;
       $fight->fighter_id_2 = $fighter2->id;
       $fight->order = '1';
       $fight->weightClass = 'WELTERWEIGHT';
       $fight->odds1 = '+156';
       $fight->odds2 = '-127';
       $fight->save();



     }

}
