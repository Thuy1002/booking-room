<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\rate>
 */
class rateFactory extends Factory

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
            'user_id' => rand(1, 5),
            'rooms_id' => rand(1, 5),
           // 'rating' => rand(1, 5),
            'service' => rand(1, 5),
            'view' => rand(1, 5),
            'quality' => rand(1, 5),
        ];
    }
}
