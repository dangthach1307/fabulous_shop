<?php

namespace App\Services;

class BaseService implements ServiceInterface
{
    public $repository;

    public function getAll()
    {
        return $this->repository->getAll();
    }
    public function find($id)
    {
        return $this->repository->find($id);
    }
    public function create($data)
    {
        return $this->repository->create($data);
    }

    public function update($id, $data)
    {
        return $this->repository->update($id, $data);
    }
    public function changeStatus($id)
    {
        return $this->repository->changeStatus($id);
    }
    public function delete($id)
    {
        return $this->repository->delete($id);
    }
    public function restore($id)
    {
        return $this->repository->restore($id);
    }
    public function destroy($id)
    {
        return $this->repository->destroy($id);
    }
    public function searchAndPaginate($searchBy, $keyword, $perPage = 5, $searchColumns = null)
    {
        return $this->repository->searchAndPaginate($searchBy, $keyword, $perPage, $searchColumns);
    }
}
