<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class roomsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->text(15),
            'type_id' =>rand(1,10),
            'image'=>'client/image/room4.jpg',
            'description' =>fake()->text(1000),
            'price' => Arr::random([200000, 500000, 1000000, 100000, 800000, 900000, 750000, 340000, 430000, 2000000]),
            'status' =>Arr::random([1,2,3,4]),
            'capacity' =>Arr::random([1,2,3,4,5,6]),
        ];
    }
}
