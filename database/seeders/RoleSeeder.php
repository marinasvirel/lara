<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
  public function run()
  {
    DB::table('roles')->insert([
      [
        'name' => 'role 1',
      ],
      [
        'name' => 'role 2',
      ],
      [
        'name' => 'role 3',
      ],
    ]);
  }
}
