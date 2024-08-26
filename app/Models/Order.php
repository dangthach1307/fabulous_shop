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

    protected $fillable = [
        "user_id",
        "first_name",
        "last_name",
        "company_name",
        "country",
        "street_address",
        "postcode_zip",
        "town_city",
        "email",
        "phone",
        "payment_type",
        "status",
    ];

    public function orderDetails()
    {
        return $this->hasMany(Orderdetail::class, 'order_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
