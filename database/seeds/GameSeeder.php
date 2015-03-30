<?php

class GameSeeder extends \Illuminate\Database\Seeder {
    public function run()
    {
        \DB::table('games')->truncate();
        \App\Game::insert([
            [
                'name' => 'League Of Legends',
                'image' => '/assets/img/games/o-league.jpg',
                'link' => 'https://signup.leagueoflegends.com/en/signup/redownload',
                'isFree' => true
            ],
            [
                'name' => "America's Army",
                'image' => '/assets/img/games/o-aa.jpg',
                'link' => 'http://store.steampowered.com/app/203290/',
                'isFree' => true
            ],
            [
                'name' => 'Borderlands 2',
                'image' => '/assets/img/games/o-borderlands_2.jpg',
                'link' => 'http://store.steampowered.com/app/49520/',
                'isFree' => false
            ],
            [
                'name' => 'Call of Duty 4 - Modern Warfare',
                'image' => '/assets/img/games/o-cod4.jpg',
                'link' => 'http://store.steampowered.com/app/7940/',
                'isFree' => false
            ],
            [
                'name' => 'Counter Strike: Global Offensive',
                'image' => '/assets/img/games/o-csgo.jpg',
                'link' => 'http://store.steampowered.com/app/730/',
                'isFree' => false
            ],
            [
                'name' => 'Dayz',
                'image' => '/assets/img/games/o-dayz.jpg',
                'link' => 'http://store.steampowered.com/app/221100/',
                'isFree' => false
            ],
            [
                'name' => 'Evolve',
                'image' => '/assets/img/games/o-Evolve.jpg',
                'link' => 'http://store.steampowered.com/app/273350/',
                'isFree' => false
            ],
            [
                'name' => 'Heroes of the Storm',
                'image' => '/assets/img/games/o-heroes.jpeg',
                'link' => 'http://us.battle.net/en/int?r=heroes',
                'isFree' => true
            ],
            [
                'name' => 'Team Fortress 2',
                'image' => '/assets/img/games/o-team_fortress_2.jpg',
                'link' => 'http://store.steampowered.com/app/440/',
                'isFree' => true
            ],
            [
                'name' => 'Tera Rising',
                'image' => '/assets/img/games/o-tera.jpg',
                'link' => 'http://tera.enmasse.com/',
                'isFree' => true
            ],
            [
                'name' => 'Diablo 3',
                'image' => '/assets/img/games/diablo3.jpg',
                'link' => 'http://us.battle.net/d3/en/',
                'isFree' => false
            ],
        ]);
    }
}