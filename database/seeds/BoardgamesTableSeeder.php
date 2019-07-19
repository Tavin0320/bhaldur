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
            'rating' => 7.8,
            'description' => 'In Arcadia Quest, players lead guilds of intrepid heroes on an epic campaign to dethrone the vampire lord and reclaim the mighty Arcadia for their own.',
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
            'rating' => 5.4,
            'description' => 'Revered for its healing techniques, the town of Yharnam is rapidly degrading as a plague that turns people into beasts spreads uncontrollably. As a Hunter, it falls to you to quell this growing threat.',
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
            'rating' => 8.5,
            'description' => 'Nemesis is a 1-5 player survival sci-fi game where players are woken up from hibernation as a crew of a space ship.',
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
            'rating' => 8.8,
            'description' => 'Kingdom Death: Monster is a fully cooperative tabletop hobby game experience. Set in a unique nightmarish world devoid of most natural resources, you control a settlement at the dawn of its existence.',
        ]);

        
    }
}
