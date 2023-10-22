<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class serviceFactory extends Factory
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
            'room_id'=>rand(1,10),
            'categori_service_id' =>rand(1,5),
            'title' => fake()->text(15),
            'duration' =>Arr::random([30,60,90]),
            'price' => Arr::random([20000, 50000, 407000, 104000, 8000, 9000, 7500, 43000, 21000]),
            'status' => Arr::random([1,2,3]),
            'description' =>fake()->text(500),
          
        ];
    }
}
