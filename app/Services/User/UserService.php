<?php


namespace App\Services\User;



use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\BaseService;


class UserService extends BaseService implements UserServiceInterface
{
    public $repository;
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
