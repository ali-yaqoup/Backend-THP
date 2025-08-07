<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bid;
use Faker\Factory as Faker;

class BidSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $userId = 1;


        foreach (range(1, 5) as $postId) {

            foreach (range(1, 20) as $i) {
                Bid::create([
                    'post_id' => $postId,
                    'user_id' => $userId,
                    'job_title' => $faker->jobTitle,
                    'client_name' => $faker->name,
                    'phone' => $faker->phoneNumber,
                    'price' => $faker->numberBetween(150, 1800),
                    'submission_date' => $faker->dateTimeBetween('-2 weeks', 'now'),
                ]);
            }
        }
    }
}
