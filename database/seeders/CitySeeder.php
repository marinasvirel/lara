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
        'country_id' => 1
      ],
      [
        'name' => 'city12',
        'country_id' => 1
      ],
      [
        'name' => 'city13',
        'country_id' => 1
      ],
      [
        'name' => 'city21',
        'country_id' => 2
      ],
      [
        'name' => 'city22',
        'country_id' => 2
      ],
      [
        'name' => 'city23',
        'country_id' => 2
      ],
      [
        'name' => 'city31',
        'country_id' => 3
      ],
      [
        'name' => 'city32',
        'country_id' => 3
      ],
      [
        'name' => 'city33',
        'country_id' => 3
      ],
    ]);
  }
}
