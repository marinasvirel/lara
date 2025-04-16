<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
                'email' => Str::random(10) . '.com',
                'age'  => '41',
                'password'  => Hash::make('12345'),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'email' => Str::random(10) . '.com',
                'age'  => '41',
                'password'  => Hash::make('123451'),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'email' => Str::random(10) . '.com',
                'age'  => '41',
                'password'  => Hash::make('123452'),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'email' => Str::random(10) . '.com',
                'age'  => '41',
                'password'  => Hash::make('123453'),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'email' => Str::random(10) . '.com',
                'age'  => '41',
                'password'  => Hash::make('123454'),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'email' => Str::random(10) . '.com',
                'age'  => '41',
                'password'  => Hash::make('123455'),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'email' => Str::random(10) . '.com',
                'age'  => '41',
                'password'  => Hash::make('123456'),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'email' => Str::random(10) . '.com',
                'age'  => '41',
                'password'  => Hash::make('123457'),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'email' => Str::random(10) . '.com',
                'age'  => '41',
                'password'  => Hash::make('123458'),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
            [
                'first_name' => Str::random(10),
                'sex'  => 'female',
                'email' => Str::random(10) . '.com',
                'age'  => '41',
                'password'  => Hash::make('123459'),
                'salary'  => '300000',
                'second_name'  => Str::random(30),
                'born'  => '1983-04-03',
            ],
        ]);
    }
}
