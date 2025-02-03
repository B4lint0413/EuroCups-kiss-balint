<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaptainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("captains")->insert([   
            [
                'id' =>   1, 
                'name' => 'Speisegger Ernő',
                'born' => 1884, 
                'death' => 1948
            ],
            [
                'id' =>  2, 
                'name' =>'Beleznay László', 
                'born' =>1891, 
                'death' =>1953
            ],
            [
                'id' =>  3, 
                'name' =>'Komjádi Béla', 
                'born' =>1892, 
                'death' =>1933
            ],
            [
                'id' => 4, 
                'name' => 'Ivády Sándor', 
                'born' => 1903, 
                'death' => 1998
            ],
            [
                'id' => 5, 
                'name' => 'Németh János', 
                'born' => 1906, 
                'death' => 1988
            ],
            [
                'id' => 6, 
                'name' => 'Sárkány Miklós', 
                'born' => 1908, 
                'death' => 1998
            ],
            [
                'id' => 7, 
                'name' => 'Rajki Béla', 
                'born' => 1909, 
                'death' => 2000
            ],
            [
                'id' => 8, 
                'name' => 'Laky Károly', 
                'born' => 1912, 
                'death' => 2000
            ],
            [
                'id' =>  9, 
                'name' => 'Lemhényi Dezső', 
                'born' => 1917, 
                'death' => 2003
            ],
            [
                'id' => 10, 
                'name' => 'Gyarmati Dezső', 
                'born' => 1927, 
                'death' => 2013
            ],
            [
                'id' => 11, 
                'name' => 'Markovits Kálmán', 
                'born' => 1931, 
                'death' => 2009
            ],
            [
                'id' => 12, 
                'name' => 'Mayer Mihály', 
                'born' => 1933, 
                'death' => 2000
            ],
            [
                'id' => 13, 
                'name' => 'Rusorán Péter', 
                'born' => 1940, 
                'death' => 2012
            ],
            [
                'id' => 14, 
                'name' => 'Konrád János', 
                'born' => 1941, 
                'death' => 2014
            ],
            [
                'id' => 15, 
                'name' => 'Kásás Zoltán', 
                'born' => 1946, 
                'death' => 0
            ],
            [
                'id' => 16, 
                'name' => 'Horkai György', 
                'born' => 1954, 
                'death' => 0
            ],
            [
                'id' => 17, 
                'name' => 'Kemény Dénes', 
                'born' => 1954, 
                'death' => 0
            ],
            [
                'id' => 18, 
                'name' => 'Benedek Tibor', 
                'born' => 1972, 
                'death' => 2020
            ]
        ]);     
    }
}
