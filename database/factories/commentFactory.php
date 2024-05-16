<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class commentFactory extends Factory
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
         //   'room_id'=>rand(1,10),
            'user_id' =>rand(1,5),
            'parent_id'  =>rand(1,5),
            'content' =>fake()->text(1000),
            'status' =>Arr::random([1,2,3,4]),
            'rate' =>Arr::random([1,2,3,4,5]),
        ];
    }
}
