<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $primary = "id";
    protected $guarded = [];

    // protected $fillable = [
    //     "first_name",
    //     "last_name",
    //     "country",
    //     "street_address",
    //     "postcode_zip",
    //     "town_city",
    //     "email",
    //     "phone",
    //     "payment_type",
    //     "status",
    // ];

    public function orderDetails()
    {
        return $this->hasMany(Orderdetail::class, 'order_id', 'id');
    }
}
