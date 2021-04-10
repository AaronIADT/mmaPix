<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fighter;

class FighterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $fighter = new Fighter();
      $fighter->name = 'Conor McGregor';
      $fighter->age = 26;
      $fighter->height = '68';
      $fighter->weight = '155 lbs';
      $fighter->reach = '74 inch';
      $fighter->record = '24-3-0';
      $fighter->country = 'Ireland';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-01/MCGREGOR_CONOR_L.png?1Q5w9ozzDDdawsoZtVLqsREduo8rIiNQ&itok=PzOsuQxr';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Israel Adesanya';
      $fighter->age = 31;
      $fighter->height = '76';
      $fighter->weight = '185 lbs';
      $fighter->reach = '80 inch';
      $fighter->record = '21-0';
      $fighter->country = 'Lagos, Nigeria';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-09/ADESANYA_ISRAEL_L_BELT_09-26.png?MhFEvp8tUPMpi_Ry8XlAxe20tTxf.UFe&itok=URgOWVbG';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Tony Ferguson';
      $fighter->age = 36;
      $fighter->height = '71';
      $fighter->weight = '155 lbs';
      $fighter->reach = '74 inch';
      $fighter->record = '26-4-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/image/1/229/DoubleheadsPNGs/FERGUSON_TONY_L.png?AD.lP5zLdfSYGll2wAzyBVIwlbEExPF.&itok=Ais7w_ZT';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Nate Diaz';
      $fighter->age = 35;
      $fighter->height = '76';
      $fighter->weight = '155 lbs';
      $fighter->reach = '76 inch';
      $fighter->record = '21-12-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/image/ufc-fighter-container/68891/profile-galery/fullbodyleft-picture/DIAZ_NATE_L.png?LosLpsLkFCrqLdnFEWlkUoNQ1m6p788M&itok=xWG-pCOI';
      $fighter->save();

    }
}
