<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->insert([
      [
        'name' => Str::random(20) . 'name',
        'city_id' => 1,
        'position_id' => 1,
      ],
      [
        'name' => Str::random(20) . 'name',
        'city_id' => 2,
        'position_id' => 2,
      ],
      [
        'name' => Str::random(20) . 'name',
        'city_id' => 3,
        'position_id' => 3,
      ],
    ]);
  }
}
