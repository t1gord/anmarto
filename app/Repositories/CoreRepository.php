<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreRepository
 *
 * @package App\Repositories
 *
 * Репозиторий для работы с сущностью.
 * Может выдавать наборы данных.
 * Не может создавать/изменять сущности.
 */
abstract class CoreRepository
{
    /**
     * @var Model
     */
    protected Model $model;


    /**
     * CoreRepository constructor
     */
    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }


    /**
     * @return mixed
     */
    abstract protected function getModelClass(): mixed;


    /**
     * @return Model
     */
    protected function startConditions(): Model
    {
        return clone $this->model;
    }
}
