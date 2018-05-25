<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class DishFeatureTest extends TestCase
{
    public function testDishCreation()
    {
        $dish = factory(\App\Models\Dish::class)->create();

        $this->json('POST', '/dishes')
            ->assertStatus(200);
    }

    public function testDishUpdated()
    {
        $dish = factory(\App\Models\Dish::class)->make();
        
        $response = $this->json('PUT', '/dishes/' . $dish->id)
            ->assertStatus(200);
    }

    public function testsDishDeleted()
    {
        $dish = factory(\App\Models\Dish::class)->make();

        $this->json('DELETE', '/dishes/' . $dish->id)
            ->assertStatus(204);
    }
}
