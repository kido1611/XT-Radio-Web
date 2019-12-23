<?php

use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'username' => 'admin',
            'email' => 'new.xtfm@gmail.com',
            'password' => bcrypt('xtradiooyeoye')
        ]);
    }
}
