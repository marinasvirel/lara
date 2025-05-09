<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
  public function run()
  {
    DB::table('user_role')->insert([
      [
        'user_id' => 1,
        'role_id' => 1,
      ],
      [
        'user_id' => 2,
        'role_id' => 2,
      ],
      [
        'user_id' => 3,
        'role_id' => 3,
      ],
      [
        'user_id' => 1,
        'role_id' => 3,
      ],
      [
        'user_id' => 3,
        'role_id' => 2,
      ],
    ]);
  }
}
