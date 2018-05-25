<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;

class UpdateController extends BaseRepositoryController
{
   public function update(Illuminate\Http\Request $request, $id)
   {
      $repository = $this->repositoryObject->update($request, $id);
      return response()->json($repository, 200);
   }

}