<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Faker\Factory as FakerFactory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed 1 super admin user
        User::create([
            'first_name' => 'Calvin Kent',
            'last_name' => 'Pamandanan',
            'birthday' => '2002-05-21',
            'gender' => 'male',
            'username' => 'superadmin',
            'email' => 'pamandanan.calvinkent@auf.edu.ph',
            'password' => Hash::make('CCPass_2324'),
            'isAdmin' => true,
            'isSuperAdmin' => true,
        ]);

        // Seed 1 admin user with the same credentials
        User::create([
            'first_name' => 'Ron Russelle',
            'last_name' => 'Bangsil',
            'birthday' => '2000-04-01',
            'gender' => 'male',
            'username' => 'admin',
            'email' => 'bangsil.ronrusselle@auf.edu.ph',
            'password' => Hash::make('CCPass_2324'),
            'isAdmin' => true,
        ]);

        // Seed 9 admin users with unique credentials and random created_at dates
        for ($i = 2; $i <= 10; $i++) {
            User::create([
                'first_name' => 'Admin',
                'last_name' => $i,
                'birthday' => now()->subYears(25),
                'gender' => 'male',
                'username' => 'admin' . $i,
                'email' => 'admin' . $i . '@auf.edu.ph',
                'password' => Hash::make('CCPass_2324'),
                'isAdmin' => true,
                'created_at' => $this->generateRandomDate(),
            ]);
        }

        // Seed 100 regular users with random created_at dates
        for ($i = 1; $i <= 100; $i++) {
            // Generate random user details
            $faker = FakerFactory::create();
            $firstName = $i === 1 ? 'Jesel Aurvic' : $faker->firstName;
            $lastName = $i === 1 ? 'De Jesus' : $faker->lastName;
            $email = $i === 1 ? 'dejesus.jeselaurvic@auf.edu.ph' : 'user' . $i . '@auf.edu.ph';

            // Generate a random 11-digit phone number
            $phoneNumber = $this->generatePhoneNumber();

            $user = User::create([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'birthday' => now()->subYears(25),
                'gender' => 'male',
                'username' => 'user' . $i,
                'email' => $email,
                'password' => $i === 1 ? Hash::make('CCPass_2324') : Hash::make('CCPass_2324'),
                'isAdmin' => false,
                'phone_number' => $phoneNumber,
                'created_at' => $this->generateRandomDate(),
            ]);
        }
    }

    private function generatePhoneNumber()
    {
        $phoneNumber = '09';
        $phoneNumber .= str_pad(rand(0, 999999999), 9, '0', STR_PAD_LEFT);

        return $phoneNumber;
    }

    private function generateRandomDate()
    {
        return now()->subDays(rand(1, 365));
    }
}
