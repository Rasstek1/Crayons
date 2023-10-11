<?php

namespace Database\Seeders;

use App\Models\Crayon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class CrayonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Crayon::create([
                'type' => $faker->randomElement(['Crayon de couleur', 'Crayon à papier', 'Crayon de cire']),
                'marque' => $faker->word,
                'couleur' => $faker->colorName,
                'quantite' => $faker->numberBetween(1, 100),
                'prix' => $faker->randomFloat(2, 0.5, 5.0),
            ]);
        }
    }
}
