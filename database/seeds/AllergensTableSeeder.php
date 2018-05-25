<?php

use App\Models\Allergen;
use Illuminate\Database\Seeder;

class AllergensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Lecitina'],
            ['id' => 2, 'name' => 'Harina'],
            ['id' => 3, 'name' => 'Suero']
        ];
        DB::table('allergens')->insert($data);
    }
}
