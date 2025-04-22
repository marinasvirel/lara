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
        'name' => 'Kiev',
      ],
      [
        'name' => 'Minsk',
      ],
    ]);
  }
}
