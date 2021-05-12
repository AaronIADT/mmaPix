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
      $fighter->weight = '170 lbs';
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

      $fighter = new Fighter();
      $fighter->name = 'Askar Askarov';
      $fighter->age = 28;
      $fighter->height = '66';
      $fighter->weight = '125 lbs';
      $fighter->reach = '67 inch';
      $fighter->record = '13-1-0';
      $fighter->country = 'Russia';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/image/ufc-fighter-container/71560/profile-galery/fullbodyleft-picture/ASKAROV_ASKAR_L.png?null&itok=ubrYpA4r';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Daniel Cormier';
      $fighter->age = 41;
      $fighter->height = '71';
      $fighter->weight = '205 lbs';
      $fighter->reach = '73 inch';
      $fighter->record = '22-3-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-08/CORMIER_DANIEL_L_08-15.png?8c0xGmF.jAN.__8bESM5BDrDOjfgi0MX&itok=ChBQrLhm';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Cody Garbrandt';
      $fighter->age = 28;
      $fighter->height = '68';
      $fighter->weight = '135 lbs';
      $fighter->reach = '65 inch';
      $fighter->record = '12-3-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/image/ufc-fighter-container/67653/profile-galery/fullbodyleft-picture/GARBRANDT_CODY_L.png?QYkCqiPkOp5NiIdHZxEJlcbEppwvCrrc&itok=2GwIiNZe';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Khabib Nurmagomedov';
      $fighter->age = 32;
      $fighter->height = '70';
      $fighter->weight = '155 lbs';
      $fighter->reach = '70 inch';
      $fighter->record = '29-0-0';
      $fighter->country = 'Russia';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-10/68504%252Fprofile-galery%252Ffullbodyleft-picture%252FNURMAGOMEDOV_KHABIB_L_BELT_10-24.png?null&itok=K9W_AlJh';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Francis Ngannou';
      $fighter->age = 34;
      $fighter->height = '76';
      $fighter->weight = '250 lbs';
      $fighter->reach = '83 inch';
      $fighter->record = '16-3-0';
      $fighter->country = 'Camaroon';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2021-04/67964%252Fprofile-galery%252Ffullbodyleft-picture%252FNGANNOU_FRANCIS_L_BELT.png?null&itok=uNd8V4p5';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Robert Wittaker';
      $fighter->age = 30;
      $fighter->height = '72';
      $fighter->weight = '185 lbs';
      $fighter->reach = ' 74 inch';
      $fighter->record = '24-5-0';
      $fighter->country = 'Australia';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2021-04/69114%252Fprofile-galery%252Ffullbodyleft-picture%252FWHITTAKER_ROBERT_L_04-17.png?null&itok=3fzwNwNg';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Max Holloway';
      $fighter->age = 29;
      $fighter->height = '71';
      $fighter->weight = '145 lbs';
      $fighter->reach = '69 inch';
      $fighter->record = '22-6-0';
      $fighter->country = 'Hawaii';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-07/HOLLOWAY_MAX_L_07-11.png?KSkCqRtvyLsb6wA66H4uKEh6P8mAGjbV&itok=MQI_1MUv';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Leon Edwards';
      $fighter->age = 29;
      $fighter->height = '72';
      $fighter->weight = '170 lbs';
      $fighter->reach = '74 inch';
      $fighter->record = '18-3-0';
      $fighter->country = 'United Kingdom';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2021-03/68564%252Fprofile-galery%252Ffullbodyleft-picture%252FEDWARDS_LEON_L_03-13.png?null&itok=7jb3_yIO';
      $fighter->save();


      $fighter = new Fighter();
      $fighter->name = 'Jon Jones';
      $fighter->age = 33;
      $fighter->height = '76';
      $fighter->weight = '205 lbs';
      $fighter->reach = '85 inch';
      $fighter->record = '26-1-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-09/JONES_JON_L_12-29.png?_V_SgUOaxjt7ja7ddhcJB4m9ALbyeMJz&itok=6nmJ-y1x';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Dustin Poirier';
      $fighter->age = 32;
      $fighter->height = '69';
      $fighter->weight = '155 lbs';
      $fighter->reach = '72 inch';
      $fighter->record = '17-6-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/image/fighter_images/Dustin_Poirier/POIRIER_DUSTIN_L.png?nb.5AkmBlpbCzgRuIajcl9UoDziUsTGk&itok=2T_JUZpz';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Georges St-Pierre';
      $fighter->age = 39;
      $fighter->height = '71';
      $fighter->weight = '185 lbs';
      $fighter->reach = '76 inch';
      $fighter->record = '16-2-0';
      $fighter->country = 'Canada';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/image/fighter_images/Georges_St-Pierre/ST-PIERRE_GEORGES_R.png?S6xp0EsQydA4p9HZ2Tha2NUAgzokiW_S&itok=KtOjXrqO';
      $fighter->save();

      $fighter = new Fighter();
      $fighter->name = 'Alexander Volkanovski';
      $fighter->age = 32;
      $fighter->height = '66';
      $fighter->weight = '145 lbs';
      $fighter->reach = '72 inch';
      $fighter->record = '22-1-0';
      $fighter->country = 'Australia';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-07/VOLKANOVSKI_ALEXANDER_L_BELT_07-11.png?LUYF9kYtThSVw9GR4ieJQ7MUdxWGv5Hl&itok=00Fqx48h';
      $fighter->save();

$fighter = new Fighter();
      $fighter->name = 'Juan Adams';
      $fighter->age = 28;
      $fighter->height = '77';
      $fighter->weight = '265 lbs';
      $fighter->reach = '80 inch';
      $fighter->record = '5-3-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/image/ufc-fighter-container/69687/profile-galery/fullbodyleft-picture/ADAMS_JUAN_L.png?a1XiJQRN_l1IA0G0dW5ccZhOzl6Gnxml&itok=0sO7_ctm';
      $fighter->save();

$fighter = new Fighter();
      $fighter->name = 'Petr Yan';
      $fighter->age = 28;
      $fighter->height = '68';
      $fighter->weight = '135 lbs';
      $fighter->reach = '67 inch';
      $fighter->record = '15-2-0';
      $fighter->country = 'Russia';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2019-12/YAN_PETR_L.png?rZFBedqd6qI6N51Nv4hWZqKNzfVWSRiJ&itok=IjIDHoiH';
      $fighter->save();

$fighter = new Fighter();
      $fighter->name = 'Henry Cejudo';
      $fighter->age = 33;
      $fighter->height = '64';
      $fighter->weight = '135 lbs';
      $fighter->reach = '64 inch';
      $fighter->record = '18-2-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2019-01/CEJUDO_HENRY_L_BELT_S.png?W2Gb1bfjrc6YcFxEJsWgKfUtqlHYVqnO&itok=mW8MvO1P';
      $fighter->save();

$fighter = new Fighter();
      $fighter->name = 'Ben Askern';
      $fighter->age = 35;
      $fighter->height = '71';
      $fighter->weight = '170 lbs';
      $fighter->reach = '72 inch';
      $fighter->record = '19-2-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/image/ufc-fighter-container/71443/profile-galery/fullbodyleft-picture/ASKREN_BEN_L.png?mL.Z0hdamNtjwq3YsCAgWT9GMWD5Sm7r&itok=wk4MNHxG';
      $fighter->save();

$fighter = new Fighter();
      $fighter->name = 'Mackenzie Dern';
      $fighter->age = 28;
      $fighter->height = '64';
      $fighter->weight = '123 lbs';
      $fighter->reach = '63 inch';
      $fighter->record = '11-1-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-12/DERN_MACKENZIE_L_10-12.png?null&itok=xwzX7qne';
      $fighter->save();

$fighter = new Fighter();
      $fighter->name = 'Dan Ige';
      $fighter->age = 29;
      $fighter->height = '67';
      $fighter->weight = '145 lbs';
      $fighter->reach = ' inch';
      $fighter->record = '14-3-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2018-12/IGE_DAN_L.png?GJBlA7PM.NzHWF5EuGxDvI0NVNqKM_j8&itok=xBWJQ8tK';
      $fighter->save();

$fighter = new Fighter();
      $fighter->name = 'Kai Kara France';
      $fighter->age = 27;
      $fighter->height = '64';
      $fighter->weight = '125 lbs';
      $fighter->reach = '69 inch';
      $fighter->record = '22-9-0';
      $fighter->country = 'New Zealand';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-09/KARA-FRANCE_KAI_L_12-14.png?do_gwcfIYzXaNdMmia9nbgtSQfShKSAl&itok=koygqB29';
      $fighter->save();

$fighter = new Fighter();
      $fighter->name = 'Sean Brady';
      $fighter->age = 28;
      $fighter->height = '70';
      $fighter->weight = '170 lbs';
      $fighter->reach = '72 inch';
      $fighter->record = '14-0-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2021-03/69577%252Fprofile-galery%252Ffullbodyleft-picture%252FBRADY_SEAN_L_10-18.png?null&itok=F01g4GR4';
      $fighter->save();

$fighter = new Fighter();
      $fighter->name = 'Viviane Araujo';
      $fighter->age = 34;
      $fighter->height = '64';
      $fighter->weight = ' 125lbs';
      $fighter->reach = '68 inch';
      $fighter->record = '10-2-0';
      $fighter->country = 'Brazil';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-09/ARAUJO_VIVIANE_L_07-27.png?EylX7BioxXit1xehjdpLjgJUb3kU__2m&itok=ScMNzgIQ';
      $fighter->save();

$fighter = new Fighter();
      $fighter->name = 'Cynthia Calvillo';
      $fighter->age = 33;
      $fighter->height = '64';
      $fighter->weight = '125 lbs';
      $fighter->reach = '64 inch';
      $fighter->record = '20-4-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/image/ufc-fighter-container/67688/profile-galery/fullbodyleft-picture/CALVILLO_CYNTHIA_L.png?zmmJr06h0WmSGvQXcHMoNZlwEriQHrvH&itok=eZwALOBb';
      $fighter->save();

$fighter = new Fighter();
      $fighter->name = 'Tracey Cortez';
      $fighter->age = 27;
      $fighter->height = '65';
      $fighter->weight = '125 lbs';
      $fighter->reach = '65 inch';
      $fighter->record = '9-1-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2021-04/71480%252Fprofile-galery%252Ffullbodyleft-picture%252FCORTEZ_TRACY_L_04-17.png?null&itok=Xf1e23j2';
      $fighter->save();

$fighter = new Fighter();
      $fighter->name = 'Omari Akhmedov';
      $fighter->age = 33;
      $fighter->height = '72';
      $fighter->weight = '185 lbs';
      $fighter->reach = '73 inch';
      $fighter->record = '21-5-1';
      $fighter->country = 'Russia';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2019-09/AKHMEDOV_OMARI_L.png?rywXXsvKpGaljAYGOeqCCSG92hC6MdDX&itok=djofwN7w';
      $fighter->save();

$fighter = new Fighter();
      $fighter->name = 'Irene Aldana';
      $fighter->age = 32;
      $fighter->height = '69';
      $fighter->weight = '135 lbs';
      $fighter->reach = '68 inch';
      $fighter->record = '12-6-0';
      $fighter->country = 'Mexico';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-10/68120%252Fprofile-galery%252Ffullbodyleft-picture%252FALDANA_IRENE_L_10-03.png?null&itok=8ulynS4W';
      $fighter->save();

$fighter = new Fighter();
      $fighter->name = 'Dominick Cruz';
      $fighter->age = 36;
      $fighter->height = '68';
      $fighter->weight = '135 lbs';
      $fighter->reach = '68 inch';
      $fighter->record = '23-3-0';
      $fighter->country = 'United States';
      $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2021-03/67839%252Fprofile-galery%252Ffullbodyleft-picture%252FCRUZ_DOMINICK_L_03-06.png?null&itok=xRAcdeSu';
      $fighter->save();

      $fighter = new Fighter();
            $fighter->name = 'Stipe Miocic';
            $fighter->age = 38;
            $fighter->height = '77';
            $fighter->weight = '240 lbs';
            $fighter->reach = '80 inch';
            $fighter->record = '20-4-0';
            $fighter->country = 'United States';
            $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-03/MIOCIC_STIPE_L.png?AvpdfeJOw_RIVkLQfyNsDDCkr7v26RtH&itok=a4hHbfjc';
            $fighter->save();

      $fighter = new Fighter();
            $fighter->name = 'Colby Covington';
            $fighter->age = 32;
            $fighter->height = '71';
            $fighter->weight = '170 lbs';
            $fighter->reach = ' 72inch';
            $fighter->record = '16-2-0';
            $fighter->country = 'United States';
            $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/image/ufc-fighter-container/67658/profile-galery/fullbodyleft-picture/COVINGTON_COLBY_L_08-03.png?null&itok=LPOeVMVr';
            $fighter->save();



      $fighter = new Fighter();
            $fighter->name = 'Justin Gaethje';
            $fighter->age = 31;
            $fighter->height = '71';
            $fighter->weight = '155 lbs';
            $fighter->reach = '70 inch';
            $fighter->record = '23-2-0';
            $fighter->country = 'United States';
            $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2018-10/GAETHJE_JUSTIN_L_0.png?ZcZgZmHemVOoQ4y1HLuEzNG4NA4DMkLL&itok=5z_HtMZK';
            $fighter->save();

      $fighter = new Fighter();
            $fighter->name = 'Jose Aldo';
            $fighter->age = 34;
            $fighter->height = '67';
            $fighter->weight = '135 lbs';
            $fighter->reach = '70 inch';
            $fighter->record = '28-7-0';
            $fighter->country = 'Brazil';
            $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2018-10/ALDO_JOSE_L.png?p_V9I3eMDXTPq_nWVMxjH_jHoA5K_bMq&itok=SReg5NVm';
            $fighter->save();


      $fighter = new Fighter();
            $fighter->name = 'Darren Till';
            $fighter->age = 28;
            $fighter->height = '72';
            $fighter->weight = '185 lbs';
            $fighter->reach = '75 inch';
            $fighter->record = '18-3-1';
            $fighter->country = 'United Kingdom';
            $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2019-03/TILL_DARREN_L_0.png?f1LrcsxhoKOKq_h4dZYJzYq62CaGfLI6&itok=SNVphpqs';
            $fighter->save();

      $fighter = new Fighter();
            $fighter->name = 'Khamzat Chimaev';
            $fighter->age = 26;
            $fighter->height = '74';
            $fighter->weight = '185 lbs';
            $fighter->reach = '75 inch';
            $fighter->record = '9-0-0';
            $fighter->country = 'Czechia';
            $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2020-07/CHIMAEV_KHAMZAT_L_07-15.png?uyOQ0.VK8Bc3Y6PTgMHS5_dhJUpL3_eE&itok=VtbRqo-A';
            $fighter->save();

      $fighter = new Fighter();
            $fighter->name = 'Donald Cerrone';
            $fighter->age = 38;
            $fighter->height = '73';
            $fighter->weight = '155 lbs';
            $fighter->reach = '73 inch';
            $fighter->record = '36-16-0';
            $fighter->country = 'United States';
            $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2021-05/67844%252Fprofile-galery%252Ffullbodyleft-picture%252FCERRONE_DONALD_L_05-08.png?null&itok=g_UiRqEw';
            $fighter->save();

      $fighter = new Fighter();
            $fighter->name = 'Rafael Dos Anjos';
            $fighter->age = 36;
            $fighter->height = '68';
            $fighter->weight = '155 lbs';
            $fighter->reach = '70 inch';
            $fighter->record = '29-13-0';
            $fighter->country = 'Brazil';
            $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2019-05/DOS-ANJOS_RAFAEL_L.png?partT5TOfSOJU8dQJFbyTU5I2JGQV966&itok=pMctr9yX';
            $fighter->save();

      $fighter = new Fighter();
            $fighter->name = 'Mike Perry';
            $fighter->age = 29;
            $fighter->height = '70';
            $fighter->weight = '170 lbs';
            $fighter->reach = '71 inch';
            $fighter->record = '14-8-0';
            $fighter->country = 'United States';
            $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2021-04/68841%252Fprofile-galery%252Ffullbodyleft-picture%252FPERRY_MIKE_L_04-10.png?null&itok=J2l8N_Gq';
            $fighter->save();

      $fighter = new Fighter();
            $fighter->name = 'Jan Blachowicz';
            $fighter->age = 38;
            $fighter->height = '74';
            $fighter->weight = '216 lbs';
            $fighter->reach = '78 inch';
            $fighter->record = '28-8-0';
            $fighter->country = 'Poland';
            $fighter->picfighter = 'https://dmxg5wxfqgb4u.cloudfront.net/styles/athlete_bio_full_body/s3/2021-03/68179%252Fprofile-galery%252Ffullbodyleft-picture%252FBLACHOWICZ_JAN_L_BELT_03-06.png?null&itok=rnKtV5AS';
            $fighter->save();

    }
}
