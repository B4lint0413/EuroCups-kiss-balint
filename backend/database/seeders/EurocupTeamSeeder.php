<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EurocupTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table("eurocup_team")->insert(
            [
                [
                    'id'=> 1,
                    'eurocup_id'=> 2,
                    'team_id' => 4,
                    'rank' => 1,
                ],[
                    'id'=> 2,
                    'eurocup_id'=> 2,
                    'team_id' => 3,
                    'rank' => 2,
                ],[
                    'id'=> 3,
                    'eurocup_id'=> 2,
                    'team_id' => 1,
                    'rank' => 3,
                ],[
                    'id'=> 4,
                    'eurocup_id'=> 2,
                    'team_id' => 2,
                    'rank' => 4,
                ],
            ]);
    }
}
