<?php


namespace App\Services\Category;



use App\Models\Product;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Services\BaseService;


class CategoryService extends BaseService implements CategoryServiceInterface
{
    public $repository;
    public function __construct(CategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


}
