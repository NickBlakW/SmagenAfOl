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
        DB::table('beers')->insert([
            [
                'name' => 'Unpuzzled Infinity',
                'description' => 'En dejlig west coast IPA.',
                'filename' => 'unpuzzled.png',
                'type' => '3'
            ,],
            [
                'name' => 'Crossing the streams in the dark #297',
                'description' => 'En speciel black IPA.',
                'filename' => 'crossing.jpg',
                'type' => '3'
            ,],
            [
                'name' => 'This Might Be Satire?!',
                'description' => 'En rund og fyldig session triple IPA.',
                'filename' => 'logo.jpg',
                'type' => '7'
            ,],
            [
                'name' => 'XoCovesa Tres Leches',
                'description' => 'En dejlig stout lavet med mexicansk chokolade og vanilje.',
                'filename' => 'logo.jpg',
                'type' => '4'
            ,],
            [
                'name' => 'Lemon Drip',
                'description' => 'En sour med lemon-drop chili.',
                'filename' => 'logo.jpg',
                'type' => '6'
            ,],
            [
                'name' => 'Feeding Frenzy',
                'description' => 'En fantastisk double IPA.',
                'filename' => 'logo.jpg',
                'type' => '3'
            ,],
            [
                'name' => 'Shakespeare Stout',
                'description' => 'En fyldig stout fra Rouge Brewing.',
                'filename' => 'Shakespeare.jpg',
                'type' => '4'
            ,],
            [
                'name' => 'Stone Anniversary 25',
                'description' => 'Stone Brewings 25 års jubilæums triple IPA.',
                'filename' => 'stone25.jpg',
                'type' => '3'
            ]
        ]);
    }
}
