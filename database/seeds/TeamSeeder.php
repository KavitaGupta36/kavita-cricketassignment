<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'name' => 'Afghanistan',
                'logouri' => 'afg.png',
                'club_state' =>"Afghanistan Cricket Board",
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'name' => 'Australia',
                'logouri' => 'aus.png',
                'club_state' => 'Cricket Australia',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ], [
                'name' => 'Bangladesh',
                'logouri' => 'bng.png',
                'club_state' => 'Bangladesh Cricket Board',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'England',
                'logouri' => 'eng.png',
                'club_state' => 'England and Wales Cricket Board',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'India',
                'logouri' => 'ind.png',
                'club_state' => 'Board of Control for Cricket in India',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'New Zealand',
                'logouri' => 'nzl.png',
                'club_state' => 'New Zealand Cricket',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'Pakistan',
                'logouri' => 'pak.png',
                'club_state' => 'Pakistan Cricket Board',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'South Africa',
                'logouri' => 'sar.png',
                'club_state' => 'Cricket South Africa',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'Sri Lanka',
                'logouri' => 'srl.png',
                'club_state' => 'Sri Lanka Cricket',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],[
                'name' => 'West Indies',
                'logouri' => 'wid.png',
                'club_state' =>'Cricket West Indies',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
        ]);
    }
}
