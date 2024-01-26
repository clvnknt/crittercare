<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            CaseTypesTableSeeder::class,
            AdditionalUserDetailsSeeder::class,
            MissingPetsSeeder::class,
            PetsTableSeeder::class,
            ReportsTableSeeder::class,
            // Add other seeder classes here as needed
        ]);
    }
}
