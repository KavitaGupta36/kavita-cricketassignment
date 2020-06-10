<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('points')->insert([
            [
                'team_id' => 1,
                'matches_played' => 8,
                'win' =>1,
                'loss' =>7,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 2,
                'matches_played' => 8,
                'win' =>7,
                'loss' =>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 3,
                'matches_played' => 10,
                'win' =>4,
                'loss' =>6,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[

                'team_id' => 4,
                'matches_played' => 8,
                'win' =>5,
                'loss' =>3,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_id' => 5,
                'matches_played' => 7,
                'win' =>6,
                'loss' =>1,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_id' => 6,
                'matches_played' => 8,
                'win' =>5,
                'loss' =>3,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_id' => 7,
                'matches_played' => 8,
                'win' =>4,
                'loss' =>4,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_id' => 8,
                'matches_played' => 8,
                'win' =>2,
                'loss' =>6,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'team_id' => 9,
                'matches_played' => 7,
                'win' =>3,
                'loss' =>4,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'team_id' => 10,
                'matches_played' => 7,
                'win' =>2,
                'loss' =>5,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
