<?php

use App\Models\Dish;
use Illuminate\Database\Seeder;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Cazuela de mariscos'],
            ['id' => 2, 'name' => 'Sopa de verduras con trigo'],
            ['id' => 3, 'name' => 'Ceviche con soya']
        ];
        DB::table('dishes')->insert($data);
    }
}
