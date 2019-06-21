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
    public function run() {

        Boardgame::create([
            'title' => 'Arcadia Quest',
            'slug' => 'arcadia-quest',
            'box_cover' => 'cover-arcadia.jpg',
            'min_players' => 2,
            'max_players' => 4,
            'min_age' => 10,
            'publisher_id' => 1,
        ]);

        Boardgame::create([
            'title' => 'Bloodborne',
            'slug' => 'bloodborne',
            'min_players' => 1,
            'max_players' => 4,
            'min_age' => 18,
            'publisher_id' => 1,
        ]);

        Boardgame::create([
            'title' => 'Nemesis',
            'slug' => 'nemesis',
            'min_players' => 1,
            'max_players' => 5,
            'min_age' => 13,
            'publisher_id' => 2,
        ]);

        Boardgame::create([
            'title' => 'Kingdom Death: Monster',
            'slug' => 'kingdom-death-monster',
            'min_players' => 1,
            'max_players' => 6,
            'min_age' => 18,
            'publisher_id' => 3,
        ]);

        
    }
}
