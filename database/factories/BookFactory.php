<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\books>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
                'tittle' => fake()->randomElement(['1984', 'A kis herceg', 'Zero', 'Kapkan', 'Buck', 'Fuze', 'Smoke', 'Nokk', 'Ela', 'Fenrir']),
                'author' => $this->faker->numberBetween(40000, 70000),
                'publication_year' => $this->faker->numberBetween(1900, 2025),
                'available_copies' => $this->faker->numberBetween(8000, 15000)
            ];
    }
}
