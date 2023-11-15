<?php

namespace App\Repositories;

use App\Models\Project as Model;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class ProjectRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Model::class;
    }


    /**
     * @return Collection
     */
    public function mainPageList(): Collection
    {
        return $this->startConditions()
            ->where('show_on_main', true)
            ->with('tags')
            ->get()
            ->makeHidden(['description', 'created_at', 'updated_at', 'show_on_main']);
    }


    /**
     * @param int|null $limit
     * @param int|null $offset
     * @return LengthAwarePaginator|Collection
     */
    public function allWithPagination(int $limit = null, int $offset = null): Collection|LengthAwarePaginator
    {
        if ($limit !== null) {
            $offset = $offset ?? $limit;

            return $this->startConditions()->query()->paginate(perPage: $limit, page: $offset/$limit);
        }

        return $this->startConditions()->all();
    }


    /**
     * @param int $id
     * @return Builder|\Illuminate\Database\Eloquent\Model|null
     */
    public function getById(int $id): \Illuminate\Database\Eloquent\Model|Builder|null
    {
        return $this->startConditions()
            ->query()
            ->where('id', $id)
            ->with('content')
            ->first()
            ->makeHidden(['show_on_main']);
    }
}
