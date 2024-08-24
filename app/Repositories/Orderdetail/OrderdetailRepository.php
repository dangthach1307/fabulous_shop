<?php

namespace App\Repositories\Orderdetail;

use App\Models\Orderdetail;
use App\Repositories\BaseRepository;


class OrderdetailRepository extends BaseRepository implements OrderdetailRepositoryInterface
{
    public function getModel()
    {
        return Orderdetail::class;
    }
}
