<?php


namespace App\Services\Order;



use App\Models\Order;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Services\BaseService;


class OrderService extends BaseService implements OrderServiceInterface
{
    public $repository;
    public function __construct(OrderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
