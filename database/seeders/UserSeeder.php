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
      'name' => Str::random(20),
      'email' => Str::random(10) . "com",
      'age' => 30,
      'salary' => 30000,
      'created_at' => '2025-04-16 08:22:28.000000',
      'update_at' => '2025-04-16 08:22:28.000000',
    ]);
  }
}
