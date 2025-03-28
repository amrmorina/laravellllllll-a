<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::create([
            'title' => 'Buy milk',
            'description' => 'Buy 2 liters of milk',
            'completed' => false,
        ]);

        $faker = Faker::create();
        for($i=0;$i<=10;$i++){
            Todo::create([
                'title' => $faker->word,
                'description' => $faker->sentence,
                'completed' => $faker->boolean,
            ]);
        }

    }
}
