<?php

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class DishesIngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['dish_id' => 1, 'ingredient_id' => 1],
            ['dish_id' => 2, 'ingredient_id' => 2],
            ['dish_id' => 3, 'ingredient_id' => 3]
        ];

        DB::table('dishes_ingredients')->insert($data);
    }
}
