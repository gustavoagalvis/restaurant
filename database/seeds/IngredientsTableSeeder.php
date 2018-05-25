<?php

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Soya'],
            ['id' => 2, 'name' => 'Trigo'],
            ['id' => 3, 'name' => 'Leche']
        ];
        DB::table('ingredients')->insert($data);
    }
}
