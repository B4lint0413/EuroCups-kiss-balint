<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChampionshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("championships")->insert([
            [
                'id' =>         1, 
                'year' =>       1912, 
                'location' =>   'Stockholm', 
                'rank' =>      5, 
                'captain_id' => 1, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         2, 
                'year' =>       1924, 
                'location' =>   'Párizs', 
                'rank' =>      5, 
                'captain_id' => 3, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         3, 
                'year' =>       1928, 
                'location' =>   'Amszterdam', 
                'rank' =>      2, 
                'captain_id' => 3, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         4, 
                'year' =>       1932, 
                'location' =>   'LosAngeles', 
                'rank' =>      1, 
                'captain_id' => 3, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         5,
                'year' =>       1936, 
                'location' =>   'Berlin', 
                'rank' =>      1, 
                'captain_id' => 2, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         6, 
                'year' =>       1948, 
                'location' =>   'London', 
                'rank' =>      2, 
                'captain_id' => 5, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         7, 
                'year' =>       1952, 
                'location' =>   'Helsinki', 
                'rank' =>      1, 
                'captain_id' => 7, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         8, 
                'year' =>       1956, 
                'location' =>   'Melbourne', 
                'rank' =>      1, 
                'captain_id' => 7, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         9, 
                'year' =>       1960, 
                'location' =>   'Róma', 
                'rank' =>      3, 
                'captain_id' => 9, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         10, 
                'year' =>       1964, 
                'location' =>   'Tokió', 
                'rank' =>      1, 
                'captain_id' => 8, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         11, 
                'year' =>       1968, 
                'location' =>   'Mexikóváros', 
                'rank' =>      3, 
                'captain_id' => 11, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         12, 
                'year' =>       1972, 
                'location' =>   'München',
                'rank' =>      2, 
                'captain_id' => 7, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         13, 
                'year' =>       1976, 
                'location' =>   'Montreal', 
                'rank' =>      1, 
                'captain_id' => 10, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         14, 
                'year' =>       1980, 
                'location' =>   'Moszkva', 
                'rank' =>      3, 
                'captain_id' => 10, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         15, 
                'year' =>       1988, 
                'location' =>   'Szöul', 
                'rank' =>      5, 
                'captain_id' => 15, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         16, 
                'year' =>       1992, 
                'location' =>   'Barcelona', 
                'rank' =>      6, 
                'captain_id' => 14, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         17, 
                'year' =>       1996, 
                'location' =>   'Atlanta', 
                'rank' =>      4, 
                'captain_id' => 16, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         18, 
                'year' =>       2000, 
                'location' =>   'Sydney', 
                'rank' =>      1, 
                'captain_id' => 17, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         19, 
                'year' =>       2004, 
                'location' =>   'Athén', 
                'rank' =>      1, 
                'captain_id' => 17, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         20, 
                'year' =>       2008, 
                'location' =>   'Peking', 
                'rank' =>      1, 
                'captain_id' => 17, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         21, 
                'year' =>       2012, 
                'location' =>   'London', 
                'rank' =>      5, 
                'captain_id' => 17, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         22, 
                'year' =>       2016, 
                'location' =>   'Rio', 
                'rank' =>      5, 
                'captain_id' => 18, 
                'type' =>       'Olimpia'
            ],
            [
                'id' =>         23, 
                'year' =>       1973, 
                'location' =>   'Belgrád', 
                'rank' =>      1, 
                'captain_id' => 10, 
                'type' =>       'Világbajnokság'
            ],
            [
                'id' =>         24, 
                'year' =>       1975, 
                'location' =>   'Cali', 
                'rank' =>      2, 
                'captain_id' => 10, 
                'type' =>       'Világbajnokság'
            ],
            [
                'id' =>         25, 
                'year' =>       1978, 
                'location' =>   'Nyugat-Berlin', 
                'rank' =>      2, 
                'captain_id' => 10, 
                'type' =>       'Világbajnokság'
            ],
            [
                'id' =>         26, 
                'year' =>       1982, 
                'location' =>   'Guayaquil', 
                'rank' =>      2, 
                'captain_id' => 12, 
                'type' =>       'Világbajnokság'
            ],
            [
                'id' =>         27, 
                'year' =>       1986, 
                'location' =>   'Madrid', 
                'rank' =>      9, 
                'captain_id' => 10, 
                'type' =>       'Világbajnokság'
            ],
            [
                'id' =>         28, 
                'year' =>       1991, 
                'location' =>   'Perth', 
                'rank' =>      3, 
                'captain_id' => 14, 
                'type' =>       'Világbajnokság'
            ],
            [
                'id' =>         29, 
                'year' =>       1994, 
                'location' =>   'Róma', 
                'rank' =>      5, 
                'captain_id' => 16, 
                'type' =>       'Világbajnokság'
            ],
            [
                'id' =>         30, 
                'year' =>       1998, 
                'location' =>   'Perth', 
                'rank' =>      2, 
                'captain_id' => 17, 
                'type' =>       'Világbajnokság'
            ],
            [
                'id' =>         31, 
                'year' =>       2001, 
                'location' =>   'Fukuoka', 
                'rank' =>      5, 
                'captain_id' => 17, 
                'type' =>       'Világbajnokság'],
            [
                'id' =>         32, 
                'year' =>       2003, 
                'location' =>   'Barcelona', 
                'rank' =>      1, 
                'captain_id' => 17, 
                'type' =>       'Világbajnokság'
            ],
            [
                'id' =>         33, 
                'year' =>       2005, 
                'location' =>   'Montreal', 
                'rank' =>      2, 
                'captain_id' => 17, 
                'type' =>       'Világbajnokság'],
            [
                'id' =>         34, 
                'year' =>       2007, 
                'location' =>   'Melbourne', 
                'rank' =>      2, 
                'captain_id' => 17, 
                'type' =>       'Világbajnokság'
            ],
            [
                'id' =>         35, 
                'year' =>       2009, 
                'location' =>   'Róma', 
                'rank' =>      5, 
                'captain_id' => 17, 
                'type' =>       'Világbajnokság'
            ],
            [
                'id' =>         36, 
                'year' =>       2011, 
                'location' =>   'Sanghaj', 
                'rank' =>      4, 
                'captain_id' => 17, 
                'type' =>       'Világbajnokság'
            ],
            [
                'id' =>         37, 
                'year' =>       2013, 
                'location' =>   'Barcelona', 
                'rank' =>      1, 
                'captain_id' => 18, 
                'type' =>       'Világbajnokság'
            ],
            [
                'id' =>         38, 
                'year' =>       2015, 
                'location' =>   'Kazan', 
                'rank' =>      6, 
                'captain_id' => 18, 
                'type' =>       'Világbajnokság'
            ],
            [
                'id' =>         39, 
                'year' =>       1927, 
                'location' =>   'Bologna', 
                'rank' =>      1, 
                'captain_id' => 3, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         40, 
                'year' =>       1931, 
                'location' =>   'Párizs', 
                'rank' =>      1, 
                'captain_id' => 1, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         41, 
                'year' =>       1934, 
                'location' =>   'Magdeburg', 
                'rank' =>      1, 
                'captain_id' => 2, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         42, 
                'year' =>       1938, 
                'location' =>   'London', 
                'rank' =>      1, 
                'captain_id' => 4, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         43, 
                'year' =>       1947, 
                'location' =>   'MonteCarlo', 
                'rank' =>      4, 
                'captain_id' => 6, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         44, 
                'year' =>       1954, 
                'location' =>   'Torino', 
                'rank' =>      1, 
                'captain_id' => 9, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         45, 
                'year' =>       1958, 
                'location' =>   'Budapest', 
                'rank' =>      1, 
                'captain_id' => 9, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         46, 
                'year' =>       1962, 
                'location' =>   'Lipcse', 
                'rank' =>      1, 
                'captain_id' => 8, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         47, 
                'year' =>       1966, 
                'location' =>   'Utrecht', 
                'rank' =>      5, 
                'captain_id' => 11, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         48, 
                'year' =>       1970, 
                'location' =>   'Barcelona', 
                'rank' =>      2, 
                'captain_id' => 7, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         49, 
                'year' =>       1974, 
                'location' =>   'Bécs', 
                'rank' =>      1, 
                'captain_id' => 10, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         50, 
                'year' =>       1977, 
                'location' =>   'Jönköping', 
                'rank' =>      1, 
                'captain_id' => 10, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         51, 
                'year' =>       1981, 
                'location' =>   'Split', 
                'rank' =>      3, 
                'captain_id' => 12, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         52, 
                'year' =>       1983, 
                'location' =>   'Róma', 
                'rank' =>      2, 
                'captain_id' => 13, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         53, 
                'year' =>       1985, 
                'location' =>   'Szófia', 
                'rank' =>      5, 
                'captain_id' => 13, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         54, 
                'year' =>       1987, 
                'location' =>   'Strasbourg', 
                'rank' =>      5, 
                'captain_id' => 15, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         55, 
                'year' =>       1989, 
                'location' =>   'Bonn', 
                'rank' =>      9, 
                'captain_id' => 15, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         56, 
                'year' =>       1991, 
                'location' =>   'Athén', 
                'rank' =>      5, 
                'captain_id' => 14, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         57, 
                'year' =>       1993, 
                'location' =>   'Sheffield', 
                'rank' =>      2, 
                'captain_id' => 16, 
                'type' =>       'Európa-bajnokság'],
            [
                'id' =>         58, 
                'year' =>       1995, 
                'location' =>   'Bécs', 
                'rank' =>      2, 
                'captain_id' => 16, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         59, 
                'year' =>       1997, 
                'location' =>   'Sevilla', 
                'rank' =>      1, 
                'captain_id' => 17, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         60, 
                'year' =>       1999, 
                'location' =>   'Firenze', 
                'rank' =>      1, 
                'captain_id' => 17, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         61, 
                'year' =>       2001, 
                'location' =>   'Budapest', 
                'rank' =>      3, 
                'captain_id' => 17, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         62, 
                'year' =>       2003, 
                'location' =>   'Kranj', 
                'rank' =>      3, 
                'captain_id' => 17, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         63, 
                'year' =>       2006, 
                'location' =>   'Belgrád', 
                'rank' =>      2, 
                'captain_id' => 17, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         64, 
                'year' =>       2008, 
                'location' =>   'Málaga', 
                'rank' =>      3, 
                'captain_id' => 17, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         65,
                'year' =>       2010, 
                'location' =>   'Zágráb', 
                'rank' =>      4, 
                'captain_id' => 17, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         66, 
                'year' =>       2012, 
                'location' =>   'Eindhoven', 
                'rank' =>      3, 
                'captain_id' => 17, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         67, 
                'year' =>       2014, 
                'location' =>   'Budapest', 
                'rank' =>      2, 
                'captain_id' => 18, 
                'type' =>       'Európa-bajnokság'
            ],
            [
                'id' =>         68, 
                'year' =>       2016, 
                'location' =>   'Belgrád', 
                'rank' =>      3, 
                'captain_id' => 18, 
                'type' =>       'Európa-bajnokság'
            ]
        ]);
    }
}
