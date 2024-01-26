<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdditionalUserDetails;
use App\Models\User;
use Faker\Factory as FakerFactory;

class AdditionalUserDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = FakerFactory::create();

        // Get all users from the 'users' table
        $users = User::all();

        foreach ($users as $user) {
            AdditionalUserDetails::create([
                'province' => 'Pampanga', // In the Philippines, replace this with actual provinces
                'city' => 'Angeles',
                'postal_code' => '2023',
                'street' => 'Sample St Blk 1 Lot 5',
                'citizenship' => 'Filipino', // Citizenship is typically 'Filipino' or 'Philippine'
                'occupation' => $faker->jobTitle,
                'spouse' => $faker->name,
                'children_names' => $faker->words(3, true), // Generate 3 random words as children's names
                'current_household_pets' => $faker->sentence,
                'visit_veterinarian' => $faker->boolean,
                'user_id' => $user->id,
            ]);
        }
    }
}
