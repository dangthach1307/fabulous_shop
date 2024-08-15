<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    use HasFactory;
    protected $table = "order_details";
    protected $primary = "id";
    protected $guard = [];

    public function order()
    {
        return $this->belongsTo(Order::class, "order_id", "id");
    }
    public function product()
    {
        return $this->belongsTo(Product::class, "product_id", "id");
    }
}
