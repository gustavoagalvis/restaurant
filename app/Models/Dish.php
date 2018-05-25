<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = ['name', 'description'];

    public function ingredients()
    {
        return $this->belongsToMany(
            'App\Models\Ingredient',
            'dishes_ingredients',           
            'dish_id',
            'ingredient_id'
        );
    }
}
