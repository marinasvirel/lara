<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('nousers')->insert([
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'age'  => '41',
                'password'  => Str::random(20),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'age'  => '41',
                'password'  => Str::random(20),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'age'  => '41',
                'password'  => Str::random(20),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'age'  => '41',
                'password'  => Str::random(20),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'age'  => '41',
                'password'  => Str::random(20),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'age'  => '41',
                'password'  => Str::random(20),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'age'  => '41',
                'password'  => Str::random(20),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'age'  => '41',
                'password'  => Str::random(20),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'age'  => '41',
                'password'  => Str::random(20),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'age'  => '41',
                'password'  => Str::random(20),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
        ]);
    }
}
