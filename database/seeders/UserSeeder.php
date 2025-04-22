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
        'email' => Str::random(10) . "com",
        'age' => 30,
        'salary' => 30000,
        'city_id' => 1,
        'updated_at' => date('Y.m.d h:i:s'),
        'created_at' => date('Y.m.d h:i:s'),
      ],
      [
        'name' => Str::random(20) . 'name',
        'email' => Str::random(10) . "com",
        'age' => 30,
        'salary' => 30000,
        'city_id' => 1,
        'updated_at' => date('Y.m.d h:i:s'),
        'created_at' => date('Y.m.d h:i:s'),
      ],
      [
        'name' => Str::random(20) . 'name',
        'email' => Str::random(10) . "com",
        'age' => 30,
        'salary' => 30000,
        'city_id' => 2,
        'updated_at' => date('Y.m.d h:i:s'),
        'created_at' => date('Y.m.d h:i:s'),
      ],
    ]);
  }
}
