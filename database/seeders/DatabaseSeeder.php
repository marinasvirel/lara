<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'first_name' => 'name',
            'sex'  => 'female',
            'age'  => '41',
            'password'  => '123',
            'salary'  => '300000',
            'second_name'  => 'surname',
            'born'  => '1983-04-03',
        ]);
    }
}
