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
        'login' => Str::random(20) . 'login',
        'password' => Str::random(10) . "password",
      ],
      [
        'login' => Str::random(20) . 'login',
        'password' => Str::random(10) . "password",
      ],
      [
        'login' => Str::random(20) . 'login',
        'password' => Str::random(10) . "password",
      ],
    ]);
  }
}
