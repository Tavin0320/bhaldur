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
    public function run()
    {
        Boardgame::create([
            'name' => 'Kingdom Death: Monster',
            'min_players' => 1,
            'max_players' => 4,
            'min_age' => 18,
            'publisher_id' => 3,
        ]);

        Boardgame::create([
            'name' => 'Nemesis',
            'min_players' => 2,
            'max_players' => 4,
            'min_age' => 13,
            'publisher_id' => 2,
        ]);
    }
}
