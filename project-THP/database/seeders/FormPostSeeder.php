<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FormPost;
use Faker\Factory as Faker;

class FormPostSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 5) as $index) {
            FormPost::create([
                'user_id' => 1,
                'title' => $faker->sentence(5),
                'description' => $faker->paragraph(3),
                'minimum_budget' => $faker->numberBetween(100, 500),
                'maximumbudget' => $faker->numberBetween(600, 2000),
                'deadline' => $faker->dateTimeBetween('+1 week', '+2 months'),
                'category' => $faker->randomElement(['Electrical', 'Plumbing', 'Painting', 'Carpentry']),
                'location' => $faker->city,
                'attachments' => 'file' . $index . '.jpg',
                'status' => $faker->randomElement(['open', 'closed', 'in_progress']),
            ]);
        }
    }
}
