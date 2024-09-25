<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB; // Use this to access the DB facade
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create(); // Create an instance of Faker

        // Define how many records you want to create
        for ($i = 0; $i < 100; $i++) {
            DB::table('products')->insert([
                'title' => $faker->word,
                'description' => $faker->text(200),
//                'image' => $faker->imageUrl(640, 480, 'products'), // Fake image URL
                'image' => '1.jpg',
                'category' => $faker->word,
                'quantity' => $faker->numberBetween(1, 100),
                'price' => $faker->randomFloat(2, 10, 100), // Price between 10 and 100
                'discount_price' => $faker->optional()->randomFloat(2, 5, 50), // Optional discount price
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
