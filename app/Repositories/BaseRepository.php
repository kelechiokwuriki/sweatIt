<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\RelationshipNotFoundException;

abstract class BaseRepository {

    protected $model;

    public function __construct(Model $model) 
    {
        $this->model = $model;
    }

    public function all()
     {
        return $this->model->all();
    }

    public function find(int $id)
    {
        return $this->model->find();
    }

    public function create(array $data)  
    {
        return $this->model->create($data);
    }

    public function update(array $data, int $id) 
    {
        return $this->model->find($id)->update($data);
    }

    public function delete(int $id) 
    {
        return $this->model->destroy($id);
    }

    public function with($relationship) 
    {
        return $this->model->with($relationship);
    }


}