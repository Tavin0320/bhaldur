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
            'min_players' => 2,
            'max_players' => 4,
            'min_age' => 10,
            'publisher_id' => 1,
        ]);

        Boardgame::create([
            'title' => 'Bloodborne',
            'min_players' => 1,
            'max_players' => 4,
            'min_age' => 18,
            'publisher_id' => 1,
        ]);

        Boardgame::create([
            'title' => 'Nemesis',
            'min_players' => 1,
            'max_players' => 5,
            'min_age' => 13,
            'publisher_id' => 2,
        ]);

        Boardgame::create([
            'title' => 'Kingdom Death: Monster',
            'min_players' => 1,
            'max_players' => 6,
            'min_age' => 18,
            'publisher_id' => 3,
        ]);

        
    }
}
