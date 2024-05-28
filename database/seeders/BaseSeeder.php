<?php

namespace Database\Seeders;

use App\Models\blog;
use App\Models\booking;
use App\Models\categori_service;
use App\Models\comment;
use App\Models\Discount;
use App\Models\Rate;
use App\Models\room;
use App\Models\rooms;
use App\Models\service;
use App\Models\type;
use App\Models\User;
use Database\Factories\rateFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Discount::factory(10)->create();
        blog::factory(5)->create(); 
        categori_service::factory(5)->create();   
        type::factory(5)->create();  
        comment::factory(5)->create();
        rooms::factory(10)->create();
        User::factory(14)->create();
        service::factory(5)->create();
        booking::factory(5)->create();  
        Rate::factory(5)->create();
    }
}
