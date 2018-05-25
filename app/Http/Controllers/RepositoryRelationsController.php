<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;

class RepositoryRelationsController extends BaseRepositoryController
{
    public function getRelations($repositoryId = null, $relationName = null, $relationId = null) {
      return $this->repositoryObject->getRelations($this->repositoryObject, $repositoryId, $relationName, $relationId);
    }
}