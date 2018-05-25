<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class IngredientFeatureTest extends TestCase
{
    
    public function testIngredientCreation()
    {
        $ingredient = factory(\App\Models\Ingredient::class)->create();

        $this->json('POST', '/ingredients')
            ->assertStatus(200);
    }

    public function testIngredientUpdated()
    {
        $ingredient = factory(\App\Models\Ingredient::class)->make();
        
        $response = $this->json('PUT', '/ingredients/' . $ingredient->id)
            ->assertStatus(200);
    }

    public function testsIngredientDeleted()
    {
        $ingredient = factory(\App\Models\Ingredient::class)->make();

        $this->json('DELETE', '/ingredients/' . $ingredient->id)
            ->assertStatus(204);
    }
}
