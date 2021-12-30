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
        DB::table('breweries')->insert([
            [
                'name' => 'People Like Us',
                'description' => 'Belgisk bryggeri'
            ],
            [
                'name' => 'Beerbliotek',
                'description' => 'Svensk Bryggeri'
            ],
            [
                'name' => 'Sudden Death Brewing Company',
                'description' => 'Tysk Bryggeri'
            ],
            [
                'name' => 'Stone Brewing',
                'description' => 'Americansk Bryggeri'
            ],
            [
                'name' => 'Bryg Bryg Bryg',
                'description' => 'Dansk Bryggeri'
            ],
            [
                'name' => 'Basqueland',
                'description' => 'Svensk Bryggeri'
            ],
            [
                'name' => 'Rogue Brewing',
                'description' => 'Amerikansk Bryggeri'
            ],
            [
                'name' => 'O/O Brewing',
                'description' => 'Norsk Bryggeri'
            ],
            [
                'name' => 'Newbarns',
                'description' => 'Scotsk Bryggeri'
            ]
        ]);

        DB::table('beers')->insert([
            [
                'name' => 'Unpuzzled Infinity',
                'description' => 'En dejlig west coast IPA.',
                'filename' => 'unpuzzled.png',
                'type' => 'IPA',
                'brewery' => 'People Like Us',
                'beer_of_the_day' => '0'
            ,],
            [
                'name' => 'Crossing the streams in the dark #297',
                'description' => 'En speciel black IPA.',
                'filename' => 'crossing.jpg',
                'type' => 'IPA',
                'brewery' => 'Beerbliotek',
                'beer_of_the_day' => '0'
            ,],
            [
                'name' => 'This Might Be Satire?!',
                'description' => 'En rund og fyldig session triple IPA.',
                'filename' => '',
                'type' => 'Stout',
                'brewery' => 'Sudden Death Brewing Company',
                'beer_of_the_day' => '0'
            ,],
            [
                'name' => 'XoCovesa Tres Leches',
                'description' => 'En dejlig stout lavet med mexicansk chokolade og vanilje.',
                'filename' => '',
                'type' => 'Stout',
                'brewery' => 'Stone Brewing',
                'beer_of_the_day' => '0'
            ,],
            [
                'name' => 'Lemon Drip',
                'description' => 'En sour med lemon-drop chili.',
                'filename' => '',
                'type' => 'Sour',
                'brewery' => 'Bryg Bryg Bryg',
                'beer_of_the_day' => '0'
            ,],
            [
                'name' => 'Feeding Frenzy',
                'description' => 'En fantastisk double IPA.',
                'filename' => '',
                'type' => 'IPA',
                'brewery' => 'Basqueland',
                'beer_of_the_day' => '1'
            ,],
            [
                'name' => 'Shakespeare Stout',
                'description' => 'En fyldig stout fra Rouge Brewing.',
                'filename' => 'Shakespeare.jpg',
                'type' => 'Stout',
                'brewery' => 'Rogue Brewing',
                'beer_of_the_day' => '0'
            ,],
            [
                'name' => 'Stone Anniversary 25',
                'description' => 'Stone Brewings 25 års jubilæums triple IPA.',
                'filename' => 'stone25.jpg',
                'type' => 'IPA',
                'brewery' => 'Stone Brewing',
                'beer_of_the_day' => '0'
            ],
            [
                'name' => 'Klavs',
                'description' => 'Meget nørdet dessert øl.',
                'filename' => '',
                'type' => 'Sour',
                'brewery' => 'Bryg Bryg Bryg',
                'beer_of_the_day' => '0'
            ],
            [
                'name' => 'Business As Usual',
                'description' => 'En frisk og humlet IPA.',
                'filename' => '',
                'type' => 'IPA',
                'brewery' => 'O/O Brewing',
                'beer_of_the_day' => '0'
            ],
            [
                'name' => 'Newbarns Table Beer',
                'description' => 'Speciel table beer.',
                'filename' => '',
                'type' => 'Table Beer',
                'brewery' => 'Newbarns',
                'beer_of_the_day' => '0'
            ]
        ]);

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
