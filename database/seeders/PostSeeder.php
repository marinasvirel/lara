<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
  public function run()
  {
    DB::table('posts')->insert([
      [
        'title' => Str::random(20),
        'slug' => 'slug1',
        'likes' => 1,
        'created_at' => date("Y-m-d"),
        'update_at' => date("Y-m-d"),
      ],
            [
        'title' => Str::random(20),
        'slug' => 'slug2',
        'likes' => 2,
        'created_at' => date("Y-m-d"),
        'update_at' => date("Y-m-d"),
      ],
            [
        'title' => Str::random(20),
        'slug' => 'slug3',
        'likes' => 3,
        'created_at' => date("Y-m-d"),
        'update_at' => date("Y-m-d"),
      ],
            [
        'title' => Str::random(20),
        'slug' => 'slug4',
        'likes' => 4,
        'created_at' => date("Y-m-d"),
        'update_at' => date("Y-m-d"),
      ],
            [
        'title' => Str::random(20),
        'slug' => 'slug5',
        'likes' => 5,
        'created_at' => date("Y-m-d"),
        'update_at' => date("Y-m-d"),
      ],
            [
        'title' => Str::random(20),
        'slug' => 'slug5',
        'likes' => 5,
        'created_at' => date("Y-m-d"),
        'update_at' => date("Y-m-d"),
      ],
    ]);
  }
}
