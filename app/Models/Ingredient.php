<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['name'];

    public function allergens()
    {
        return $this->belongsToMany(
            'App\Models\Allergen',
            'ingredients_allergens',
            'ingredient_id',
            'allergen_id'
        );
    }

    
    public function dishes()
    {
        return $this->belongsToMany(
            'App\Models\Dish',
            'dishes_ingredients',
            'ingredient_id',
            'dish_id'
        );
    }
}
