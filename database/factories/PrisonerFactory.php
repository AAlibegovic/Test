<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Prisoner;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prisoner>
 */
class PrisonerFactory extends Factory
{
    protected $model = Prisoner::class;

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
            'DOB' => Carbon::today()->subYears(80),
            'gender' => $this->faker->numberBetween(0,1),
            'number' => $this->faker->unique()->numberBetween(1,100),
            'description' => $this->faker->randomElement(['Crna kosa', 'Plava kosa', 'Ćelav']),
        ];
    }
}