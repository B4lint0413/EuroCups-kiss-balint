<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table("teams")->insert([
            [
                'id' => 1,
                'country' => 'Magyarország',
                'captain' => 'Baróti Lajos'
            ],
            [
                'id' => 2,
                'country' => 'Dánia',
                'captain' => 'Arne Sørensen'
            ],
            [
                'id' => 3,
                'country' => 'Szovjet unió',
                'captain' => 'Nikita Simonyan'
            ],
            [
                'id' => 4,
                'country' => 'Spanyolország',
                'captain' => 'José Villalonga'
            ],
        ]);
    }
}
