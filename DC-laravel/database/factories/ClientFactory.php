<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'last_name' => fake()-> word,
            'first_name' => fake()-> word,
            'address' => fake()->address(),
            'phone' => fake()->numerify('####-###-####'),
            'birth_date' => fake()->dateTime()

        ];
    }
}
