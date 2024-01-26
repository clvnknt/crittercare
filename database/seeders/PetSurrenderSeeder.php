<?php

namespace Database\Seeders;

use App\Models\PetSurrender;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class PetSurrenderSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run(): void
    {
        // Get user IDs that are not administrators or super administrators
        $userIds = User::where('isAdmin', 0)->where('isSuperAdmin', 0)->pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            // Randomly select a user ID that is not an admin or superadmin
            $user_id = Arr::random($userIds);

            PetSurrender::create([
                'user_id' => $user_id,
                'pet_name' => 'Pet ' . ($i + 1),
                'reason' => 'Reason for pet ' . ($i + 1),
                'status' => 'Pending', // Set the status as needed
                'surrender_date' => now()->addDays($i), // Adjust the surrender date as needed
                'age_years' => rand(1, 10), // Random age in years (adjust as needed)
                'age_months' => rand(0, 11), // Random age in months (adjust as needed)
                'type' => ($i % 2 == 0) ? 'Dog' : 'Cat', // Alternating between Dog and Cat
                'species' => 'Species A', // Set the species as needed
                'photo' => null, // Set the photo path or leave it as null
            ]);
        }
    }
}

