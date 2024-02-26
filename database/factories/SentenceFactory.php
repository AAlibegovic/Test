<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sentence;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sentence>
 */
class SentenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
     public function definition()
     {
         return [
             'prisonerNO' => $this->faker->numberBetween(1,100),
             'cellNO' => $this->faker->numberBetween(1,50),
             'startDate' => Carbon::today()->subDays(rand(0, 365)),
             'endDate' => Carbon::today()->addDays(rand(0, 365)),
             'description' => $this->faker->randomElement(['Krađa', 'Pijan vozio', 'Korupcija']),
           
             
         ];
     }
}
