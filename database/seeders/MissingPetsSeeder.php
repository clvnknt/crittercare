<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\MissingPet;
use Carbon\Carbon; // Import Carbon

class MissingPetsSeeder extends Seeder
{
    public function run()
    {
        // Get all user IDs
        $userIds = User::pluck('id')->all();

        // Generate and insert 50 missing pet records for each status with random data
        foreach (['pending', 'solved', 'open', 'cancelled'] as $status) {
            foreach (range(1, 50) as $index) {
                $user_id = $userIds[array_rand($userIds)]; // Select a random user ID

                // Generate a random date for "Missing Since" between now and 5 years ago
                $missingSince = Carbon::now()->subYears(rand(1, 5))->subMonths(rand(0, 11));

                // Generate a random date for "Date Found" if status is "solved"
                $dateFound = null; // Initialize date_found as null

                // Set date_found only for "solved" records and ensure it's later than missing_since
                if ($status === 'solved') {
                    $dateFound = $missingSince->copy()->addDays(rand(1, 30));

                    // Ensure date_found is later than missing_since
                    while ($dateFound <= $missingSince) {
                        $dateFound->addDay();
                    }
                }

                // Generate a random date for "created_at" between 6 months before "missing_since" and now
                $createdAt = Carbon::now()->subMonths(rand(1, 6))->subDays(rand(0, $missingSince->diffInDays()));

                MissingPet::create([
                    'user_id' => $user_id,
                    'pet_name' => 'Pet Name ' . $index,
                    'type' => ['Dog', 'Cat'][rand(0, 1)], // Randomly select 'Dog' or 'Cat'
                    'gender' => ['male', 'female'][rand(0, 1)],
                    'species' => 'Species ' . $index,
                    'age_years' => rand(1, 10),
                    'age_months' => rand(1, 12),
                    'pictures' => null, // Set the picture to null
                    'notable_features' => 'Notable Features ' . $index,
                    'last_seen_location' => 'Location ' . $index,
                    'description' => 'Description ' . $index,
                    'contact_social_media' => 'Contact Social Media ' . $index,
                    'contact_phone' => 'Contact Phone ' . $index,
                    'contact_email' => 'contact_email_' . $index . '@example.com',
                    'status' => $status, // Set the status based on conditions
                    'missing_since' => $missingSince, // Set the random "Missing Since" date
                    'date_found' => $dateFound, // Set the random "Date Found" date or null
                    'created_at' => $createdAt, // Set the random "created_at" date
                    'updated_at' => $missingSince, // Use the same date for updated_at
                ]);
            }
        }
    }
}
