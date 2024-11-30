<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;
use Carbon\Carbon;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::insert([
            [
                'name' => 'Jogjakarta',
                'slug' => 'jogjakarta',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident possimus repellendus, corrupti excepturi natus, quis eveniet hic nesciunt illum laudantium alias modi cupiditate dignissimos nihil assumenda ipsam. Explicabo, ipsam vel!',
                'images' => '{"1": "jogja1.jpg", "2": "jogja2.jpg", "3": "jogja3.jpg"}',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Magelang',
                'slug' => 'magelang',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident possimus repellendus, corrupti excepturi natus, quis eveniet hic nesciunt illum laudantium alias modi cupiditate dignissimos nihil assumenda ipsam. Explicabo, ipsam vel!',
                'images' => '{"1": "magelang1.jpeg", "2": "magelang2.jpeg", "3": "magelang3.webp"}',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
