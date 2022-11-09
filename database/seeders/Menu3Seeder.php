<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu3;

class Menu3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu3::create([
            "category" => "sandwiches",
            "name" => "Big Tasty",
            "priority" => 1,
            "price" => 10.88
        ]);
        Menu3::create([
            "category" => "Drinks",
            "name" => "Coca-Cola",
            "priority" => 1,
            "price" => 4.50
        ]);
        Menu3::create([
            "category" => "sandwiches",
            "name" => "Big Mac",
            "priority" => 3,
            "price" => 7.80
        ]);
        Menu3::create([
            "category" => "sandwiches",
            "name" => "Cheeseburger",
            "priority" => 3,
            "price" => 4.40
        ]);
        Menu3::create([
            "category" => "Drinks",
            "name" => "Sprite",
            "priority" => 2,
            "price" => 4.40
        ]);
    }
}
