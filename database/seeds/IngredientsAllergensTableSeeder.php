<?php

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientsAllergensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['allergen_id' => 1, 'ingredient_id' => 1],
            ['allergen_id' => 2, 'ingredient_id' => 2],
            ['allergen_id' => 3, 'ingredient_id' => 3]
        ];
        DB::table('ingredients_allergens')->insert($data);
    }
}
