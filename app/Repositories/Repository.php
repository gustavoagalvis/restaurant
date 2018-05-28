<?php
namespace App\Repositories;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;
use Illuminate\Http\Request;

abstract class Repository implements RepositoryInterface {

    private $app;

    protected $model;

    public function __construct(App $app) {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    abstract function model();

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function makeModel() {
        $model = $this->app->make($this->model());
        return $this->model = $model->newQuery();
    }

    /**
     * @param array $columns
     * @return mixed
     */
    public function all($columns = array('*')) {
        return $this->model->get($columns);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        try {
            return $this->model->findOrFail($id);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function create(Illuminate\Http\Request $data) {
        
        try {
            return $this->model->create($data->all());
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(array $data, $id, $attribute="id") {
        try {
            return $this->model->where($attribute, '=', $id)->update($data);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id) {
        return $this->model->destroy($id);
    }

    public function find($id, $columns = array('*')) {
        try {
            return $this->model->findOrFail($id, $columns);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
 
    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    public function getRelations($repositoryObject, $repositoryId, $relationName, $relationId)
    {
        $data = null;
        switch ($relationName) {
            case 'dishes':
                $data = $repositoryObject->getDishes($repositoryId, $relationId);
                break;
            case 'allergens':
                $data = $repositoryObject->getAllergens($repositoryId, $relationId);
                break;
            case 'ingredients':
                $data = $repositoryObject->getIngredients($repositoryId, $relationId);
                break;
            case null:
                if(is_null($repositoryId)) {
                    $data = $repositoryObject->all();
                } else {
                    $data = $repositoryObject->show($repositoryId);
                }
                break;
        }

        return $data;
    }
}