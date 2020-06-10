<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            [
                'team_id' => 1,
                'first_name' => "Rashid",
                'last_name' =>"Khan",
                'image_uri' =>"afg_1.jpeg",
                'player_jersey_no' =>8,
                'country' =>"Afganistan",
                'matches' =>98,
                'runs' =>2287,
                'highest_score' =>116,
                'fifties' =>11,
                'hundreds' =>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 1,
                'first_name' => "Gulbadin",
                'last_name' =>"Naib",
                'image_uri' =>"afg_2.jpeg",
                'player_jersey_no' =>9,
                'country' =>"Afganistan",
                'matches' =>49,
                'runs' =>1139,
                'highest_score' =>129,
                'fifties' =>4,
                'hundreds' =>2,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 1,
                'first_name' => "Dawlat",
                'last_name' =>"Zadran",
                'image_uri' =>"zadran.jpg",
                'player_jersey_no' =>15,
                'country' =>"Afganistan",
                'matches' =>8,
                'runs' =>1139,
                'highest_score' =>129,
                'fifties' =>4,
                'hundreds' =>2,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 2,
                'first_name' => 'Steven Peter',
                'last_name' =>"Devereux Smith",
                'image_uri' =>"devereux_smith.png",
                'player_jersey_no' =>12,
                'country' =>"Australia",
                'matches' =>108,
                'runs' =>3431,
                'highest_score' =>164,
                'fifties' =>19,
                'hundreds' =>8,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 2,
                'first_name' => 'David Andrew',
                'last_name' =>"Warner",
                'image_uri' =>"warner.png",
                'player_jersey_no' =>4,
                'country' =>"Australia",
                'matches' =>106,
                'runs' =>4343,
                'highest_score' =>179,
                'fifties' =>17,
                'hundreds' =>14,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_id' => 5,
                'first_name' => 'Virat',
                'last_name' =>"Kohli",
                'image_uri' =>"kohli.png",
                'player_jersey_no' =>18,
                'country' =>"India",
                'matches' =>248,
                'runs' =>11867,
                'highest_score' =>183,
                'fifties' =>58,
                'hundreds' =>43,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_id' => 5,
                'first_name' => 'MS',
                'last_name' =>"Dhoni",
                'image_uri' =>"dhoni.png",
                'player_jersey_no' =>7,
                'country' =>"India",
                'matches' =>350,
                'runs' =>10773,
                'highest_score' =>183,
                'fifties' =>73,
                'hundreds' =>10,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 7,
                'first_name' => "Ahmed",
                'last_name' =>"Shehzad",
                'image_uri' =>"ahmed.jpeg",
                'player_jersey_no' =>7,
                'country' =>"India",
                'matches' =>350,
                'runs' =>10773,
                'highest_score' =>183,
                'fifties' =>73,
                'hundreds' =>10,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 7,
                'first_name' => "Nasir",
                'last_name' =>"Jamshed",
                'image_uri' =>"jamshed.jpeg",
                'player_jersey_no' =>7,
                'country' =>"India",
                'matches' =>350,
                'runs' =>10773,
                'highest_score' =>183,
                'fifties' =>73,
                'hundreds' =>10,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[ 
                'team_id' => 7,
                'first_name' => "Mohammad",
                'last_name' =>"Hafeez",
                'image_uri' =>"hafeez.jpeg",
                'player_jersey_no' =>7,
                'country' =>"India",
                'matches' =>350,
                'runs' =>10773,
                'highest_score' =>183,
                'fifties' =>73,
                'hundreds' =>10,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ]);
    }
}
