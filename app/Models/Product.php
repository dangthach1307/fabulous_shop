<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primary = "id";
    protected $guarded  = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
    public function productAttributes()
    {
        return $this->hasMany(ProductAttribute::class, 'product_id', 'id');
    }
    public function productComments()
    {
        return $this->hasMany(ProductComment::class, 'product_id', 'id');
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }

    public function getContentWithImagePath()
    {
        $imagePath = !empty($this->productImages[0]->path) ? asset('front/images/products/' . $this->productImages[0]->path) : 'default-image-path';
        return str_replace('{{ product_image_path }}', $imagePath, $this->content);
    }
}
