<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;

class CreateController extends BaseRepositoryController
{
   public function create(Illuminate\Http\Request $request)
   {  
      $response = $this->repositoryObject->create($request->all());
      return response()->json($response);
      
   }

}
