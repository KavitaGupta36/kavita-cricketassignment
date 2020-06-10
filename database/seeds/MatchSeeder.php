<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert([
            [
                'first_team' => 1,
                'second_team' => 2,
                'winner' =>1,
                'match_date' =>Carbon::create()->year(2019)->month(5)->day(15),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'first_team' => 2,
                'second_team' => 3,
                'winner' =>3,
                'match_date' =>Carbon::create()->year(2019)->month(10)->day(16),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'first_team' => 1,
                'second_team' => 3,
                'winner' =>1,
                'match_date' =>Carbon::create()->year(2020)->month(5)->day(17),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[

                'first_team' => 2,
                'second_team' => 5,
                'winner' =>5,
                'match_date' =>Carbon::create()->year(2020)->month(5)->day(18),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'first_team' => 5,
                'second_team' => 3,
                'winner' =>5,
                'match_date' =>Carbon::create()->year(2020)->month(5)->day(19),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'first_team' => 1,
                'second_team' => 5,
                'winner' =>5,
                'match_date' =>Carbon::create()->year(2020)->month(5)->day(20),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
