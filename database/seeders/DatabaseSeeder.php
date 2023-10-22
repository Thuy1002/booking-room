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
        $this->call(BaseSeeder::class);
    }
}
