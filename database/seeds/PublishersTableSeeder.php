<?php

use Illuminate\Database\Seeder;
use App\Publisher;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Publisher::create([
            'name' => 'CMON'
        ]);

        Publisher::create([
            'name' => 'Awaken Realms'
        ]);

        Publisher::create([
            'name' => 'Kingdom Death'
        ]);
    }
}
