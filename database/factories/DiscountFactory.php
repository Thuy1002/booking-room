<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'code' => fake()->unique()->text(7),
            'description' => fake()->text(50),
            'amount' => Arr::random([23,44,22,55,44]),
            'start_date' => fake()->date,
            'end_date' => fake()->date,
        ];
    }
}
