<?php 
namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use App\Repositories\Repository;

class IngredientRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\Models\Ingredient';
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function getDishes($repositoryId, $relationId)
    {
        try {
            if (!is_null($relationId)) {
                return $this->model->find($repositoryId)->dishes->find($relationId);
            } else {
                return $this->model->find($repositoryId)->dishes;
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
            if (!is_null($relationId)) {
                return $this->model->find($repositoryId)->allergens->find($relationId);
            } else {
               return $this->model->find($repositoryId)->allergens; 
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}