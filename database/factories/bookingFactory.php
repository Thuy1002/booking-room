<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class bookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $currentDateTime = now();

        // Tính thời gian kết thúc là sau 7 ngày
        $endDate = $currentDateTime->addDays(7);
        return [
            //
            'room_id'=>rand(1,10),
            'user_id' =>rand(1,5),
            'check_in_date' => fake()->dateTimeThisYear(''),
            'check_out_date' => fake()->dateTimeBetween('now', $endDate),
            'booking_date'=>fake()->dateTimeThisYear(),
            'description' =>fake()->text(1000),
            'total_price' => Arr::random([200000, 500000, 1000000, 100000, 800000, 900000, 750000, 340000, 430000, 2000000]),
            'status' =>Arr::random([1,2,3,4]),
            'payment_status' =>Arr::random([1,2,3,4]),
            'children' =>Arr::random([1,2,3,4,5,6]),
            'adults' =>Arr::random([1,2,3,4,5,6]),
        ];
    }
}
