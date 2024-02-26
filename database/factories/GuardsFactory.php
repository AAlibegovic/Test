<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Guards;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guards>
 */
class GuardsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fname' => $this->faker->randomElement(['Ado', 'Almir', 'Alan', 'Alen']),
            'lname' => $this->faker->randomElement(['D', 'E', 'S', 'K']),
            'DOB' => Carbon::today()->subYears(50),
            'gender' => $this->faker->numberBetween(0,1),
            'wardNO' => $this->faker->randomElement(['1', '2', '3','4']),
            'shift' => $this->faker->randomElement(['1','2','3']),
        ];
    
    }
}
