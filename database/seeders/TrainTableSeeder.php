<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $train = new Train();
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->estimated_departure = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->estimated_arrival = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->train_code = $faker->numberBetween(1000, 9999);
            $train->N_coach = $faker->numberBetween(1, 10);
            $train->on_time = $faker->randomElement([true,false]);
            $train->cancelled = $faker->randomElement([true,false]);
            $train->save();
        }
    }
}
