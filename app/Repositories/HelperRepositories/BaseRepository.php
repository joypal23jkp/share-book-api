<?php

namespace App\Repositories\HelperRepositories;

use App\Repositories\Interfaces\EloquentRepository;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepository
{
    /**
     * @var Model
     */
    protected $global_model;

    /**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->global_model = $model;
    }

    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model
    {
        return $this->global_model->create($attributes);
    }


    /**
     * @param $id
     * @return Model|null
     */
    public function find($id): ?Model
    {
        return $this->global_model->find($id);
    }
}
