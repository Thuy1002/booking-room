<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $email = fake()->safeEmail();
        return [
            'name' => fake()->name(),
            'email' => $email,
            'email_verified_at' => now(),
            'image' => '',
            'number_phone' => fake()->phoneNumber(),
            'password' => Hash::make(123456), // 12345678
            'remember_token' => Str::random(10),
            'status' => Arr::random([1,2]),
            'role' => Arr::random([1,2]),
            'about_me' => fake()->text(100),
            'address' => 'hà nội',
            'gender' => Arr::random(['Nam', 'Nữ']),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
