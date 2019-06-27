<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        User::create([
            'name' => 'MrTavin',
            'email' => 'tavin.bousfield@gmail.com',
            'password' => Hash::make('secret'),
            'created_at' => Carbon::now(),

        ]);
        
    }
}
