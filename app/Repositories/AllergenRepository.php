<?php 
namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use App\Repositories\Repository;

class AllergenRepository extends Repository {

    function model()
    {
        return 'App\Models\Allergen';
    }

    function  getIngredients($repositoryId, $relationId)
    {
        try {
            if (!is_null($relationId)) {
                return $this->model->find($repositoryId)->ingredients->find($relationId);
            } else {
                return $this->model->find($repositoryId)->ingredients;
            }
        } catch (\Exception $e) {
            return null;
        }
    }

    function getDishes($repositoryId, $relationId)
    {
        try {
            $dishes=[];
            $this->model->find($repositoryId)->ingredients->map(function ($ingredient) use (&$dishes, $relationId) {
                    if (!is_null($relationId)) {
                        $dishes[] = $ingredient->dishes->find($relationId);
                    } else {
                        $dishes[] = $ingredient->dishes;
                    }
                });

            return $dishes;
        } catch (\Exception $e) {
            return null;
        }
    }
}