<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
//        DB::table('breweries')->insert([
//            [
//                'name' => 'People Like Us',
//                'description' => 'Belgisk bryggeri'
//            ],
//            [
//                'name' => 'Beerbliotek',
//                'description' => 'Svensk Bryggeri'
//            ],
//            [
//                'name' => 'Sudden Death Brewing Company',
//                'description' => 'Tysk Bryggeri'
//            ],
//            [
//                'name' => 'Stone Brewing',
//                'description' => 'Americansk Bryggeri'
//            ],
//            [
//                'name' => 'Bryg Bryg Bryg',
//                'description' => 'Dansk Bryggeri'
//            ],
//            [
//                'name' => 'Basqueland',
//                'description' => 'Svensk Bryggeri'
//            ],
//            [
//                'name' => 'Rogue Brewing',
//                'description' => 'Amerikansk Bryggeri'
//            ],
//            [
//                'name' => 'O/O Brewing',
//                'description' => 'Norsk Bryggeri'
//            ],
//            [
//                'name' => 'Newbarns',
//                'description' => 'Scotsk Bryggeri'
//            ]
//        ]);
//
//        DB::table('beers')->insert([
//            [
//                'name' => 'Unpuzzled Infinity',
//                'description' => 'En dejlig west coast IPA.',
//                'type' => 'IPA',
//                'brewery' => 'People Like Us',
//                'alc_percent' => '6.1',
//                'IBU' => '0',
//                'size' => '440',
//                'filename' => 'unpuzzled.png',
//                'beer_of_the_day' => '0'
//            ,],
//            [
//                'name' => 'Crossing the streams in the dark',
//                'description' => 'En speciel black IPA.',
//                'type' => 'IPA',
//                'brewery' => 'Beerbliotek',
//                'alc_percent' => '6.5',
//                'IBU' => '50',
//                'size' => '330',
//                'filename' => 'crossing.jpg',
//                'beer_of_the_day' => '0'
//            ,],
//            [
//                'name' => 'This Might Be Satire?!',
//                'description' => 'En rund og fyldig session triple IPA.',
//                'type' => 'Stout',
//                'brewery' => 'Sudden Death Brewing Company',
//                'alc_percent' => '8.0',
//                'IBU' => '0',
//                'size' => '440',
//                'filename' => '',
//                'beer_of_the_day' => '0'
//            ,],
//            [
//                'name' => 'XoCovesa Tres Leches',
//                'description' => 'En dejlig stout lavet med mexicansk chokolade og vanilje.',
//                'type' => 'Stout',
//                'brewery' => 'Stone Brewing',
//                'alc_percent' => '8.5',
//                'IBU' => '40',
//                'size' => '340',
//                'filename' => '',
//                'beer_of_the_day' => '0'
//            ,],
//            [
//                'name' => 'Lemon Drip',
//                'description' => 'En sour med lemon-drop chili.',
//                'type' => 'Sour',
//                'brewery' => 'Bryg Bryg Bryg',
//                'alc_percent' => '5.5',
//                'IBU' => '0',
//                'size' => '440',
//                'filename' => '',
//                'beer_of_the_day' => '0'
//            ,],
//            [
//                'name' => 'Feeding Frenzy',
//                'description' => 'En fantastisk double IPA.',
//                'type' => 'IPA',
//                'brewery' => 'Basqueland',
//                'alc_percent' => '8.0',
//                'IBU' => '0',
//                'size' => '423',
//                'filename' => '',
//                'beer_of_the_day' => '1'
//            ,],
//            [
//                'name' => 'Shakespeare Stout',
//                'description' => 'En fyldig stout fra Rouge Brewing.',
//                'type' => 'Stout',
//                'brewery' => 'Rogue Brewing',
//                'alc_percent' => '5.7',
//                'IBU' => '60',
//                'size' => '388',
//                'filename' => 'Shakespeare.jpg',
//                'beer_of_the_day' => '0'
//            ,],
//            [
//                'name' => 'Stone Anniversary 25',
//                'description' => 'Stone Brewings 25 års jubilæums triple IPA.',
//                'type' => 'IPA',
//                'brewery' => 'Stone Brewing',
//                'alc_percent' => '12.5',
//                'IBU' => '100',
//                'size' => '330',
//                'beer_of_the_day' => '0',
//                'filename' => 'stone25.jpg',
//            ],
//            [
//                'name' => 'Klavs',
//                'description' => 'Meget nørdet dessert øl.',
//                'type' => 'Sour',
//                'brewery' => 'Bryg Bryg Bryg',
//                'alc_percent' => '9.0',
//                'IBU' => '64',
//                'size' => '330',
//                'filename' => '',
//                'beer_of_the_day' => '0'
//            ],
//            [
//                'name' => 'Business As Usual',
//                'description' => 'En frisk og humlet IPA.',
//                'type' => 'IPA',
//                'brewery' => 'O/O Brewing',
//                'alc_percent' => '7.0',
//                'IBU' => '65',
//                'size' => '500',
//                'filename' => '',
//                'beer_of_the_day' => '0'
//            ],
//            [
//                'name' => 'Newbarns Table Beer',
//                'description' => 'Speciel table beer.',
//                'type' => 'Table Beer',
//                'brewery' => 'Newbarns',
//                'alc_percent' => '3.0',
//                'IBU' => '0',
//                'size' => '440',
//                'filename' => '',
//                'beer_of_the_day' => '0'
//            ]
//        ]);

        DB::table('announcements')->insert([
            [
                'announcement' =>
                    'Øllets Dag er en årligt tilbagevendende begivenhed, som foregår første lørdag i september. Formålet med Øllets Dag er at få fokus på øl og ølkultur og få hele landet til at syde med øl-aktiviteter.'
            ],
            [
                'announcement' =>
                    'Øl er en alkoholisk drik, der fremstilles ved en bryggeproces, hvori der indgår malt, vand og gær. Der findes desuden en lang række andre ingredienser, der i større eller mindre omfang finder anvendelse i brygningen af visse øltyper.'
            ]
        ]);
    }
}
