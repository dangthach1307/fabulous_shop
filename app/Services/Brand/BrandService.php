<?php


namespace App\Services\Brand;



use App\Models\Brand;
use App\Repositories\Brand\BrandRepositoryInterface;
use App\Services\BaseService;


class BrandService extends BaseService implements BrandServiceInterface
{
    public $repository;
    public function __construct(BrandRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
