<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accounts>
 */
class AccountsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => fake()->numberBetween(1,20),
            'type' => fake()->randomElement(['saving','current','checking','time_deposit']),
            'initial_deposit' => fake()->numberBetween(1000,100000),
            'status' => fake()->randomElement(['active','dormant'])
        ];
    }
}
