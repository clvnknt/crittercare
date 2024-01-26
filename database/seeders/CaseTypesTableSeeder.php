<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CaseType;

class CaseTypesTableSeeder extends Seeder
{
    public function run()
    {
        $caseTypes = [
            // Low Severity
            ['name' => 'Unauthorized Dog Selling', 'severity' => 'Low', 'type' => 'Dog'],
            ['name' => 'Unleashed Dogs in Public Spaces', 'severity' => 'Low', 'type' => 'Dog'],
            ['name' => 'Missing Cat Identification', 'severity' => 'Low', 'type' => 'Cat'],
            ['name' => 'Minor Cat Neglect', 'severity' => 'Low', 'type' => 'Cat'],
            ['name' => 'Non-Emergency Dog Hoarding', 'severity' => 'Low', 'type' => 'Others'],
            ['name' => 'Non-Emergency Cat Hoarding', 'severity' => 'Low', 'type' => 'Others'],

            // Medium Severity
            ['name' => 'Investigation of Dog Cruelty', 'severity' => 'Medium', 'type' => 'Dog'],
            ['name' => 'Illegal Dog Breeding Operations', 'severity' => 'Medium', 'type' => 'Dog'],
            ['name' => 'Inadequate Shelter for Cats', 'severity' => 'Medium', 'type' => 'Cat'],
            ['name' => 'Cat Abandonment', 'severity' => 'Medium', 'type' => 'Cat'],
            ['name' => 'Pet Theft for Resale (Dog)', 'severity' => 'Medium', 'type' => 'Others'],
            ['name' => 'Pet Theft for Resale (Cat)', 'severity' => 'Medium', 'type' => 'Others'],

            // High Severity
            ['name' => 'Dog Cruelty', 'severity' => 'High', 'type' => 'Dog'],
            ['name' => 'Emergency Dog Hoarding', 'severity' => 'High', 'type' => 'Dog'],
            ['name' => 'Wildlife Trafficking (Cats)', 'severity' => 'High', 'type' => 'Cat'],
            ['name' => 'Cat Fighting Rings', 'severity' => 'High', 'type' => 'Cat'],
            ['name' => 'Large-Scale Puppy Mill Operations (Dog)', 'severity' => 'High', 'type' => 'Others'],
            ['name' => 'Large-Scale Kitten Mill Operations (Cat)', 'severity' => 'High', 'type' => 'Others'],
        ];

        foreach ($caseTypes as $caseType) {
            CaseType::create($caseType);
        }
    }
}



