<?php
declare(strict_types=1);

namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

abstract class BaseRepositoryEloquent {

    private Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }
}
