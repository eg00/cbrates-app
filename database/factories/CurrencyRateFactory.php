<?php

namespace Database\Factories;

use App\Enum\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CurrencyRate>
 */
class CurrencyRateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'currency' => $this->faker->unique()->randomElement(Currency::cases()),
            'value' => $this->faker->randomFloat(5, 0.01, 1000),
        ];
    }
}
