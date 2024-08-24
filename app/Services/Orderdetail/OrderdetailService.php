<?php


namespace App\Services\Orderdetail;



use App\Models\Orderdetail;
use App\Repositories\Orderdetail\OrderdetailRepositoryInterface;
use App\Services\BaseService;


class OrderdetailService extends BaseService implements OrderdetailServiceInterface
{
    public $repository;
    public function __construct(OrderdetailRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
