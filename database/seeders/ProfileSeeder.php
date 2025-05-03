<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
  public function run()
  {
    DB::table('profiles')->insert([
      [
        'name' => Str::random(20) . 'name',
        'surname' => Str::random(10) . "surname",
        'email' => Str::random(10) . "email",
        'user_id' => 1,
      ],
      [
        'name' => Str::random(20) . 'name',
        'surname' => Str::random(10) . "surname",
        'email' => Str::random(10) . "email",
        'user_id' => 2,
      ],
      [
        'name' => Str::random(20) . 'name',
        'surname' => Str::random(10) . "surname",
        'email' => Str::random(10) . "email",
        'user_id' => 3,
      ],
    ]);
  }
}
