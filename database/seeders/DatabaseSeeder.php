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
        $this->call([
            // PostSeeder::class,
            UserSeeder::class,
            // CitySeeder::class,
            // ProfileSeeder::class,
            // CitySeeder::class,
            // CountrySeeder::class,
            // PositionSeeder::class,
            RoleSeeder::class,
            UserRoleSeeder::class,
        ]);
    }
}
