<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\blogFactory;
use Database\Factories\bookingFactory;
use Database\Factories\categori_serviceFactory;
use Database\Factories\commentFactory;
use Database\Factories\roomsFactory;
use Database\Factories\serviceFactory;
use Database\Factories\typeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(5)->create();
        blogFactory::factory(5)->create();
        commentFactory::factory(5)->create();
        bookingFactory::factory(5)->create();
        roomsFactory::factory(5)->create();
        serviceFactory::factory(5)->create();
        typeFactory::factory(5)->create();
        categori_serviceFactory::factory(5)->create();
    }
}
