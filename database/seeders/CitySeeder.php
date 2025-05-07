<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
  public function run()
  {
    DB::table('cities')->insert([
      [
        'name' => 'city11',
        'population' => 10000,
        'country_id' => 1
      ],
      [
        'name' => 'city12',
        'population' => 20000,
        'country_id' => 1
      ],
      [
        'name' => 'city13',
        'population' => 20000,
        'country_id' => 1
      ],
      [
        'name' => 'city21',
        'population' => 10000,
        'country_id' => 2
      ],
      [
        'name' => 'city22',
        'population' => 20000,
        'country_id' => 2
      ],
      [
        'name' => 'city23',
        'population' => 20000,
        'country_id' => 2
      ],
      [
        'name' => 'city31',
        'population' => 10000,
        'country_id' => 3
      ],
      [
        'name' => 'city32',
        'population' => 20000,
        'country_id' => 3
      ],
      [
        'name' => 'city33',
        'population' => 20000,
        'country_id' => 3
      ],
    ]);
  }
}
