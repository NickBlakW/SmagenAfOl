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
                'type' => '3'
            ,],
            [
                'name' => 'Crossing the streams in the dark #297',
                'type' => '3'
            ,],
            [
                'name' => 'This Might Be Satire?!',
                'type' => '7'
            ,],
            [
                'name' => 'XoCovesa Tres Leches',
                'type' => '4'
            ,],
            [
                'name' => 'Lemon Drip',
                'type' => '6'
            ,],
            [
                'name' => 'Feeding Frenzy',
                'type' => '3'
            ,],
            [
                'name' => 'Shakespeare Stout',
                'type' => '4'
            ,],
            [
                'name' => 'Stone Anniversary 25',
                'type' => '3'
            ]
        ]);
    }
}
