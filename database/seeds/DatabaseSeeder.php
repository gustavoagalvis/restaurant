<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AllergensTableSeeder::class);
        $this->call(DishesTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(DishesIngredientsTableSeeder::class);
        $this->call(IngredientsAllergensTableSeeder::class);
    }
}
