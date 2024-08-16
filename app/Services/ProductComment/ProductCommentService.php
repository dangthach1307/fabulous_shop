<?php


namespace App\Services\ProductComment;



use App\Models\Product;
use App\Repositories\ProductComment\ProductCommentRepositoryInterface;
use App\Services\BaseService;


class ProductCommentService extends BaseService implements ProductCommentServiceInterface
{
    public $repository;
    public function __construct(ProductCommentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function find($id){
        $product  = $this->repository->find($id);

        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);
        if($countRating != 0) {
            $avgRating = round($sumRating / $countRating);
        }
        $product->avgRating = $avgRating;
        return $product;
    }
}
