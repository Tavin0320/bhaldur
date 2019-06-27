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
            'duration' => '60',
            'min_age' => 10,
            'publisher_id' => 1,
        ]);

        Boardgame::create([
            'title' => 'Bloodborne: The Board Game',
            'slug' => 'bloodborne-the-board-game',
            'box_cover' => 'cover-bloodborne.jpg',
            'min_players' => 1,
            'max_players' => 4,
            'duration' => '45-75',
            'min_age' => 18,
            'publisher_id' => 1,
        ]);

        Boardgame::create([
            'title' => 'Nemesis',
            'slug' => 'nemesis',
            'min_players' => 1,
            'max_players' => 5,
            'duration' => '90-180',
            'min_age' => 13,
            'publisher_id' => 2,
        ]);

        Boardgame::create([
            'title' => 'Kingdom Death: Monster',
            'slug' => 'kingdom-death-monster',
            'box_cover' => 'cover-kingdom-death-monster.jpg',
            'min_players' => 1,
            'max_players' => 6,
            'duration' => '60-180',
            'min_age' => 18,
            'publisher_id' => 3,
        ]);

        
    }
}
