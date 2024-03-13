<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CurrencyRateUpdate>
 */
class CurrencyRateUpdateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'is_completed' => $this->faker->randomElement([true, false]),
            'created_at' => $this->faker->dateTimeBetween('-1 day', 'now'),
        ];
    }
}
