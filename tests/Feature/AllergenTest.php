<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class AllergenFeatureTest extends TestCase
{
    
    public function testAllergenCreation()
    {
        $allergen = factory(\App\Models\Allergen::class)->create();

        $this->json('POST', '/allergens')
            ->assertStatus(200);
    }

    public function testAllergenUpdated()
    {
        $allergen = factory(\App\Models\Allergen::class)->make();
        
        $response = $this->json('PUT', '/allergens/' . $allergen->id)
            ->assertStatus(200);
    }

    public function testsAllergenDeleted()
    {
        $allergen = factory(\App\Models\Allergen::class)->make();

        $this->json('DELETE', '/allergens/' . $allergen->id)
            ->assertStatus(204);
    }
}
