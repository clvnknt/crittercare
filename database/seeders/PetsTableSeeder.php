<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pet;
use Faker\Factory as FakerFactory;
use Carbon\Carbon; // Import Carbon

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = FakerFactory::create();

        // Seed 50 pets as "Yes" for up for adoption
        $this->seedPets($faker, 'Yes', 50);

        // Seed 50 pets as "No" for up for adoption
        $this->seedPets($faker, 'No', 50);

        // Seed 50 pets as "Processing"
        $this->seedPets($faker, 'Processing', 50);

        // Seed 50 pets as "Adopted"
        $this->seedPets($faker, 'Adopted', 50);
    }

    /**
     * Seed pets with the specified 'up for adoption' status.
     *
     * @param \Faker\Generator $faker
     * @param string $status
     * @param int $count
     */
    private function seedPets($faker, $status, $count)
    {
        for ($i = 1; $i <= $count; $i++) {
            Pet::create([
                'pet_name' => $faker->firstName,
                'gender' => ['male', 'female'][rand(0, 1)],
                'type' => $faker->randomElement(['Dog', 'Cat']),
                'species' => $faker->word,
                'age_years' => $faker->numberBetween(1, 15),
                'age_months' => $faker->numberBetween(0, 11),
                'description' => $faker->sentence,
                'up_for_adoption' => $status,
                'photo' => null, // You can provide a URL or path to a pet photo here
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
        return Carbon::now()->subDays(rand(1, 365));
    }
}
