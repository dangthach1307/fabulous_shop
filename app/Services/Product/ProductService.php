<?php


namespace App\Services\Product;



use App\Models\Product;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Services\BaseService;


class ProductService extends BaseService implements ProductServiceInterface
{
    public $repository;
    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function find($id)
    {
        $product  = $this->repository->find($id);

        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);
        if ($countRating != 0) {
            $avgRating = round($sumRating / $countRating);
        }
        $product->avgRating = $avgRating;
        return $product;
    }

    public function getRelatedProducts($product, $limit = 10)
    {
        return $this->repository->getRelatedProducts($product, $limit);
    }
    public function getFeaturedProducts()
    {
        return $this->repository->getFeaturedProducts();
    }
}
