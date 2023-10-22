<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'name' => fake()->name(),
        $users = [
            [
                'name' => fake()->name(),
                'email' => 'dangthanhthuy@example.com',
                'password' => Hash::make(123456),
                'image' => '',
                'role' => 1,//admin
                'status' => 1, // chưa nghĩ ra
                'number_phone' => '0143456781',
                'about_me' => fake()->text(100),
                'address' => 'hà nội',
                'gender' => 'Nam',
            ],
            [
                'name' => fake()->name(),
                'email' => 'thuy2002@example.com',
                'password' => Hash::make(123456),
                'image' => '',
                'role' => 2,//client
                'status' => 1, // chưa nghĩ ra
                'number_phone' => '0123456781',
                'about_me' => fake()->text(100),
                'address' => 'hà nội',
                'gender' => 'Nữ',
            ],
        ];
        DB::table('users')->insert($users);
    }
}