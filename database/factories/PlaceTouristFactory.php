<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlaceTourist>
 */
class PlaceTouristFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(),
            'ubication'=>$this->faker->randomElement(['Lima', 'Cuzco', 'Arequipa']),
            'img'=>$this->faker->randomElement([null])
        ];
    }
}
