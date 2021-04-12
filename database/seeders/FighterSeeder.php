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

      $fighter = new Fighter();
      $fighter->name = 'Jorge Masvidal';
      $fighter->age = 35;
      $fighter->height = '71';
      $fighter->weight = '156 lbs';
      $fighter->reach = '71 inch';
      $fighter->record = '35-14-0';
      $fighter->country = 'Miami, U.S.A';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2019-07/MASVIDAL_JORGE_L.png?jIj20ceeCeZ4VIh69BJ1UOYlxu7LgZfn&itok=z4WMSP54';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Rose Namajunas';
      $fighter->age = 28;
      $fighter->height = '65';
      $fighter->weight = '115 lbs';
      $fighter->reach = '65 inch';
      $fighter->record = '10-4-0';
      $fighter->country = 'Milwaukee, U.S.A';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-06/NAMAJUNAS_ROSE_L.png?sSFYido2dX96Ll6h8QwfKNgSPozjfkyB&itok=2OGJb2Iy';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Valentina Shevchenko';
      $fighter->age = 32;
      $fighter->height = '65';
      $fighter->weight = '125 lbs';
      $fighter->reach = '67 inch';
      $fighter->record = '19-3-0';
      $fighter->country = 'Kyrgyzstan';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-02/SHEVCHENKO_VALENTINA_L_BELT.png?c0XNoFFnYikher_MUq0F1b7GRcF3w46K&itok=Bwu9VTFN';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Zhang Weili';
      $fighter->age = 31;
      $fighter->height = '64';
      $fighter->weight = '115 lbs';
      $fighter->reach = '63 inch';
      $fighter->record = '21-1-0';
      $fighter->country = 'China';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-03/WEILI_ZHANG_L_BELT.png?AMetk_7LbA2y78RgPhYprFvduyZtZvnM&itok=2Zt3jNBB';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Jessica Andrade';
      $fighter->age = 29;
      $fighter->height = '61.5';
      $fighter->weight = '135 lbs';
      $fighter->reach = '62 inch';
      $fighter->record = '21-8-0';
      $fighter->country = 'Brazil';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-10/68243%252Fprofile-galery%252Ffullbodyleft-picture%252FANDRADE_JESSICA_L_10-17.png?null&itok=00eshHd1';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Kamaru Usman';
      $fighter->age = 33;
      $fighter->height = '72';
      $fighter->weight = '170 lbs';
      $fighter->reach = '76 inch';
      $fighter->record = '18-1-0';
      $fighter->country = 'Nigeria';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-07/USMAN_KAMARU_L_BELT_12-14.png?OuM8S6Z8qBwPrEeJFMYuDd8lvVcgBsyI&itok=L3ZTbg1B';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Andre Muniz';
      $fighter->age = 30;
      $fighter->height = '73';
      $fighter->weight = '185 lbs';
      $fighter->reach = '78 inch';
      $fighter->record = '20-4-0';
      $fighter->country = 'Brazil';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-09/MUNIZ_ANDRE_L_11-16.png?JodxJ0FLxgxLQa1l4lg9JiSy_6LEeOHl&itok=Yjqar8J1';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Beneil Dariush';
      $fighter->age = 31;
      $fighter->height = '70';
      $fighter->weight = '155 lbs';
      $fighter->reach = '72 inch';
      $fighter->record = '20-4-1';
      $fighter->country = 'Iran';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-02/DARIUSH_BENEIL_L.png?OUMsoMhGiIsZM_I3WP761SXf_fgJlQNZ&itok=Z--JBYVk';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Charles Oliviera';
      $fighter->age = 30;
      $fighter->height = '70';
      $fighter->weight = '155 lbs';
      $fighter->reach = '74 inch';
      $fighter->record = '29-8-0';
      $fighter->country = 'Brazil';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2019-11/OLIVEIRA_CHARLES_L.png?AG2YsSRmMkO26hK6GrX9sHttyaM3Fa5_&itok=XDiV1jug';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Jacare Souza';
      $fighter->age = 41;
      $fighter->height = '73';
      $fighter->weight = '185 lbs';
      $fighter->reach = '72 inch';
      $fighter->record = '26-8-0';
      $fighter->country = 'Brazil';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2019-04/SOUZA_JACARE_L.png?CTcin0SAwUnYS8F7K3Yhf9lEmbiZTp03&itok=F1R0Vg7D';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Michael Chandler';
      $fighter->age = 34;
      $fighter->height = '68';
      $fighter->weight = '155 lbs';
      $fighter->reach = '71.5 inch';
      $fighter->record = '22-5-0';
      $fighter->country = 'High Ridge, U.S.A';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-12/CHANDLER_MICHAEL_L_10-24.png?null&itok=NvpVqgQc';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Tony Ferguson';
      $fighter->age = 36;
      $fighter->height = '71';
      $fighter->weight = '155 lbs';
      $fighter->reach = '76.5 inch';
      $fighter->record = '26-4-0';
      $fighter->country = 'Oxnard, U.S.A';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/image/1/229/DoubleheadsPNGs/FERGUSON_TONY_L.png?AD.lP5zLdfSYGll2wAzyBVIwlbEExPF.&itok=Ais7w_ZT';
      $fighter->save();

    }
}
