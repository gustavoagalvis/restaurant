<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allergen extends Model
{
    protected $fillable = ['name'];


    public function ingredients()
    {
        return $this->belongsToMany(
            'App\Models\Ingredient',
            'ingredients_allergens',
            'allergen_id',
            'ingredient_id'
        );
    }
}
