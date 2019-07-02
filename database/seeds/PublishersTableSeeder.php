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
            'name' => 'CMON',
            'website' => 'https://www.cmon.com',
        ]);

        Publisher::create([
            'name' => 'Awaken Realms',
            'website' => 'http://awakenrealms.com/',
        ]);

        Publisher::create([
            'name' => 'Kingdom Death',
            'website' => 'https://kingdomdeath.com/',
        ]);

        Publisher::create([
            'name' => 'Serious Poulp',
            'website' => 'https://www.seriouspoulp.com/',
        ]);
    }
}
