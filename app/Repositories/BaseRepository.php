<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements RepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @throws BindingResolutionException
     */
    public function __construct()
    {
        $this->model = app()->make($this->getModel());
    }

    /**
     * Get the model class name.
     *
     * @return string
     */
    abstract public function getModel();

    /**
     * Get all instances of the model.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * Find an instance of the model by ID.
     *
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Create a new instance of the model.
     *
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

    /**
     * Update an instance of the model by ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function changeStatus($id)
    {
        $getStt = $this->model->where('id', $id)->pluck('status')->first();
        $newStt = $getStt == 1 ? 0 : 1;
        return $this->update($id, ['status' => $newStt]);
    }

    /**
     * Change the status of an instance by ID.
     *
     * @param int $id
     * @return bool
     */
    public function update($id, $data)
    {
        $result = $this->model->find($id);
        if ($result) {
            return $result->update($data);
        }

        return false;
    }


    /**
     * Soft delete an instance by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete($id)
    {
        $result = $this->model->find($id);
        if ($result) {
            return $result->delete();
        }

        return false;
    }

    /**
     * Restore a soft deleted instance by ID.
     *
     * @param int $id
     * @return bool
     */
    public function restore($id)
    {
        $result = $this->model->withTrashed()->find($id);
        if ($result) {
            return $result->restore();
        }

        return false;
    }

    /**
     * Permanently delete an instance by ID.
     *
     * @param int $id
     * @return bool
     */
    public function destroy($id)
    {
        $result = $this->model->withTrashed()->find($id);
        if ($result) {
            return $result->forceDelete();
        }

        return false;
    }
}
