<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Floor>
 */
class FloorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {



        return [
            'spot' => fake()->unique()->numberBetween(1, 10),
            'isBooked' => fake()->randomElement(['yes', 'no']),
            'spotImg' => fake()->unique()->image(),
            'capacity' => fake()->numberBetween(4, 12)
        ];
    }
}
