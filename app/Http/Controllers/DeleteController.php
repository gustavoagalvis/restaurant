<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;

class DeleteController extends BaseRepositoryController
{
   public function delete(Illuminate\Http\Request $request, $id)
   {
       $repository = $this->repositoryObject->delete($id);
       return response()->json(null, 204);
   }

}
