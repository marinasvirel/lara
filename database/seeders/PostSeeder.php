<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
  public function run() {
    DB::table('posts')->insert([
      'title' => Str::random(20),
      'slug' => Str::random(10),
      'created_at' => '2025-04-16 08:22:28.000000',
      'update_at' => '2025-04-16 08:22:28.000000',
    ]);
  }
}
