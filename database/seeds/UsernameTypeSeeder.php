<?php

class UsernameTypeSeeder extends \Illuminate\Database\Seeder {
    public function run()
    {
        \DB::table('username_types')->truncate();
        \App\UsernameType::insert([
            [
                'type' => 'Steam',
            ],
            [
                'type' => 'Battle.Net',
            ],
            [
                'type' => 'League Of Legends'
            ]
        ]);
    }
}