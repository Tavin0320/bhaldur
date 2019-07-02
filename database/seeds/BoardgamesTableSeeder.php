<?php

use Illuminate\Database\Seeder;
use App\Boardgame;

class BoardgamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     /**
      * This seeder manually inserts boardgame data into the table everytime it is seeded.
      * Used for testing purposes only. The final product will have registered and verified 
      * user submissions, hopefully.
      */
    public function run() {

        Boardgame::create([
            'title' => 'Arcadia Quest',
            'slug' => 'arcadia-quest',
            'box_cover' => 'cover-arcadia.jpg',
            'min_players' => 2,
            'max_players' => 4,
            'min_duration' => 60,
            'min_age' => 10,
            'publisher_id' => 1,
            'release_year' => 2014,
        ]);

        Boardgame::create([
            'title' => 'Bloodborne: The Board Game',
            'slug' => 'bloodborne-the-board-game',
            'box_cover' => 'cover-bloodborne.jpg',
            'min_players' => 1,
            'max_players' => 4,
            'min_duration' => 45,
            'max_duration' => 75,
            'min_age' => 18,
            'publisher_id' => 1,
            'release_year' => 2020,
        ]);

        Boardgame::create([
            'title' => 'Nemesis',
            'slug' => 'nemesis',
            'box_cover' => 'cover-nemesis.jpg',
            'min_players' => 1,
            'max_players' => 5,
            'min_duration' => 90,
            'max_duration' => 180,
            'min_age' => 13,
            'publisher_id' => 2,
            'release_year' => 2018,
        ]);

        Boardgame::create([
            'title' => 'Kingdom Death: Monster',
            'slug' => 'kingdom-death-monster',
            'box_cover' => 'cover-kingdom-death-monster.jpg',
            'min_players' => 1,
            'max_players' => 6,
            'min_duration' => 60,
            'max_duration' => 180,
            'min_age' => 18,
            'publisher_id' => 3,
            'release_year' => 2015,
        ]);

        
    }
}
