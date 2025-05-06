<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
  public function run()
  {
    DB::table('countries')->insert([
      [
        'name' => 'country1'
      ],
      [
        'name' => 'country2'
      ],
      [
        'name' => 'country3'
      ],
    ]);
  }
}
