<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker; // Import Faker

class ReportsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create(); // Create a Faker instance

        // Generate 200 reports for 100 users
        for ($i = 1; $i <= 200; $i++) {
            $user_id = rand(1, 100); // Assuming you have user IDs from 1 to 100
            $case_type_id = rand(1, 5); // Assuming you have case type IDs from 1 to 5

            $status = $this->generateRandomStatus();

            DB::table('reports')->insert([
                'user_id' => $user_id,
                'case_type_id' => $case_type_id,
                'description' => $faker->sentence,
                'status' => $status,
                'picture' => null, // Initially, no pictures
                'video' => null, // Initially, no videos
                'created_at' => $this->generateRandomDate(),
                'updated_at' => $this->generateRandomDate(),
            ]);
        }
    }

    /**
     * Generate a random date within a realistic range.
     *
     * @return \Carbon\Carbon
     */
    private function generateRandomDate()
    {
        return now()->subDays(rand(1, 365));
    }

    /**
     * Generate a random report status.
     *
     * @return string
     */
    private function generateRandomStatus()
    {
        $statuses = ['pending', 'acknowledged', 'solved', 'cancelled'];
        return $statuses[array_rand($statuses)];
    }
}
