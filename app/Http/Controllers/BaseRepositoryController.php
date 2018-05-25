<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
use Illuminate\Container\Container as App;
use App\Repositories;


class BaseRepositoryController extends BaseController
{

   private $app;
   protected $repositoryName;
   protected $repositoryObject;

   public function __construct(Request $request, App $app)
   {
       $this->app = $app;
       $this->makeRepository($request, $app);
   }
   
    public function makeRepository(Request $request, App $app) {

      $nameResult = $this->strtokFirstName($request->route()->uri);

      $this->setRepositoryName($nameResult);

      $repository = null;
      if (!is_null($this->repositoryName)) {
        $repository = $this->app->make($this->repositoryName);  
      }

      $this->repositoryObject = $repository;
      return $this->repositoryObject;
    }

    
    public function strtokFirstName($uriRoute) {
      return strtok($uriRoute, '/');
    }

    public function setRepositoryName($firstName) {
      $repositoryName = "App\Repositories\\";
      switch ($firstName) {
        case 'allergens':
          $repositoryName .= 'AllergenRepository';
          break;
        case 'dishes':
          $repositoryName .= 'DishRepository';
          break;
        case 'ingredients':
          $repositoryName .= 'IngredientRepository';
          break;
        default:
          $repositoryName = null;
          break;
      }

      $this->repositoryName = $repositoryName;
      return $this->repositoryName;
    }

}