<?php 
namespace App\Repositories;

interface RepositoryInterface
{
    public function all();

    public function show($id);
   
    public function create(Illuminate\Http\Request $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id, $columns = array('*'));
 
    public function findBy($field, $value, $columns = array('*'));
}