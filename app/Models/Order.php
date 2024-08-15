<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $primary = "id";
    protected $guard = [];

    public function orderDetails()
    {
        return $this->hasMany(Orderdetail::class, 'order_id', 'id');
    }
}
