<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cells;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cell>
 */
class CellsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'wardNO' => $this->faker->randomElement(['1', '2', '3', '4']),
            'floor' => $this->faker->randomElement(['0', '1', '2', '3']),
        ];
    }
}
