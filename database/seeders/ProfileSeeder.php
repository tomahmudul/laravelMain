<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
Use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $faker = Faker::create();
            $profile = new Profile();
            $profile->user_id = $i + 1;
            $profile->first_name = $faker->firstName;
            $profile->last_name = $faker->lastName;
            $profile->phone = $faker->phoneNumber;
            $profile->country = $faker->countryCode;
            $profile->age = $faker->numberBetween(18,60);
            $profile->save();
        }
    }
}
