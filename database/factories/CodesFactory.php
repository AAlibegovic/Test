<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Codes;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Codes>
 */
class CodesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cellNumber' => $this->faker->numberBetween(1,25),
        ];
    }
}
