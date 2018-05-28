<?php 
namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use App\Repositories\Repository;

class DishRepository extends Repository {

    function model()
    {
        return 'App\Models\Dish';
    }

    function getIngredients($repositoryId, $relationId)
    {
        try {
            if (!is_null($relationId)) {
                return $this->model->find($repositoryId)->ingredients->find($relationId);
            } else {
                return $this->model->find($repositoryId)->ingredients;
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function getAllergens($repositoryId, $relationId)
    {
        try {    
            $allergens=[];
            $this->model->find($repositoryId)->ingredients->map(function ($ingredient) use (&$allergens, $relationId) {
                    if (!is_null($relationId)) {
                        $allergens[] = $ingredient->allergens->find($relationId);
                    } else {
                        $allergens[] = $ingredient->allergens;
                    }
                });

            return $allergens;

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}