<?php
/**
 * Created by PhpStorm.
 * User: bryce
 * Date: 3/25/15
 * Time: 8:31 PM
 */

class UsernameSeeder extends \Illuminate\Database\Seeder {
    public function run()
    {
        \DB::table('usernames')->truncate();
        \App\Username::insert([
            [
                'username' => '12ampage_AAC',
                'type_id' => 1
            ],
            [
                'username' => 'rampage#1121',
                'type_id' => 2
            ],
            [
                'username' => '12ampage',
                'type_id' => 3
            ]
        ]);
    }

}