<?php

namespace App\Repositories\Product;

use App\Models\Product;

use App\Repositories\BaseRepository;


class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function getModel()
    {
        return Product::class;
    }
    public function getRelatedProducts($product, $limit = 10)
    {
        return $this->model->where('category_id', $product->category_id)
            ->where('tag', $product->tag)
            ->where('id', '!=', $product->id)->limit($limit)->get();
    }
}
