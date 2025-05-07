<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
  public function run()
  {
    DB::table('positions')->insert([
      [
        'name' => 'position 1',
      ],
      [
        'name' => 'position 2',
      ],
      [
        'name' => 'position 3',
      ],
    ]);
  }
}
