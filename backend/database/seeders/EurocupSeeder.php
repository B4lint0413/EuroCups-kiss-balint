<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EurocupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table("eurocups")->insert([
            [
                'id' => 1,
                'year' => 1960,
                'organiser' => 'Franciaország'
            ], [
                'id' => 2,
                'year' => 1964,
                'organiser' => 'Spanyolország'
            ], [
                'id' => 3,
                'year' => 1968,
                'organiser' => 'Olaszország'
            ], [
                'id' => 4,
                'year' => 1972,
                'organiser' => 'Belgium'
            ], [
                'id' => 5,
                'year' => 1976,
                'organiser' => 'Jugoszlávia'
            ], [
                'id' => 6,
                'year' => 1980,
                'organiser' => 'Olaszország'
            ], [
                'id' => 7,
                'year' => 1984,
                'organiser' => 'Franciaország'
            ], [
                'id' => 8,
                'year' => 1988,
                'organiser' => 'Németország'
            ], [
                'id' => 9,
                'year' => 1992,
                'organiser' => 'Svédország'
            ],[
                'id' => 10,
                'year' => 1996,
                'organiser' => 'Anglia'
            ],[
                'id' => 11,
                'year' => 2000,
                'organiser' => 'Belgium'
            ],[
                'id' => 12,
                'year' => 2004,
                'organiser' => 'Portugália'
            ],[
                'id' => 13,
                'year' => 2008,
                'organiser' => 'Ausztria - Svájc'
            ],[
                'id' => 14,
                'year' => 2012,
                'organiser' => 'Lengyelország'
            ],[
                'id' => 15,
                'year' => 2016,
                'organiser' => 'Franciaország'
            ],[
                'id' => 16,
                'year' => 2020,
                'organiser' => 'Európai Unió'
            ],[
                'id' => 17,
                'year' => 2024,
                'organiser' => 'Németország'
            ],
        ]);
    }
}
