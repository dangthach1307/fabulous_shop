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
    public function getAll()
    {
        $avgRating = 0;
        $products = $this->repository->getAll();
        foreach ($products as $product) {
            $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
            $countRating = count($product->productComments);
            if ($countRating != 0) {
                $avgRating = round($sumRating / $countRating);
            }
            $product->avgRating = $avgRating;
        }
        return $products;
    }
    // public function getProductPaginates($request)
    // {
    //     $avgRating = 0;
    //     $products = $this->repository->getProductPaginates($request);
    //     foreach ($products as $product) {
    //         $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
    //         $countRating = count($product->productComments);
    //         if ($countRating != 0) {
    //             $avgRating = round($sumRating / $countRating);
    //         }
    //         $product->avgRating = $avgRating;
    //     }
    //     return $products;
    // }


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
        $avgRating = 0;
        $relatedProducts = $this->repository->getRelatedProducts($product, $limit);
        foreach ($relatedProducts as $relatedProduct) {
            $sumRating = array_sum(array_column($relatedProduct->productComments->toArray(), 'rating'));
            $countRating = count($relatedProduct->productComments);
            if ($countRating != 0) {
                $avgRating = round($sumRating / $countRating);
            }
            $relatedProduct->avgRating = $avgRating;
        }
        return $relatedProducts;
    }
    public function getFeaturedProducts()
    {
        $avgRating = 0;
        $featuredProducts = $this->repository->getFeaturedProducts();
        foreach ($featuredProducts as $featuredProduct) {
            $sumRating = array_sum(array_column($featuredProduct->productComments->toArray(), 'rating'));
            $countRating = count($featuredProduct->productComments);
            if ($countRating != 0) {
                $avgRating = round($sumRating / $countRating);
            }
            $featuredProduct->avgRating = $avgRating;
        }
        return $featuredProducts;
    }
    public function getNewArrivalProducts()
    {
        $avgRating = 0;
        $newArrivalProducts = $this->repository->getNewArrivalProducts();
        foreach ($newArrivalProducts as $newArrivalProduct) {
            $sumRating = array_sum(array_column($newArrivalProduct->productComments->toArray(), 'rating'));
            $countRating = count($newArrivalProduct->productComments);
            if ($countRating != 0) {
                $avgRating = round($sumRating / $countRating);
            }
            $newArrivalProduct->avgRating = $avgRating;
        }
        return $newArrivalProducts;
    }
    public function getSaleProducts()
    {
        $avgRating = 0;
        $saleProducts = $this->repository->getOnSaleProducts();
        foreach ($saleProducts as $saleProduct) {
            $sumRating = array_sum(array_column($saleProduct->productComments->toArray(), 'rating'));
            $countRating = count($saleProduct->productComments);
            if ($countRating != 0) {
                $avgRating = round($sumRating / $countRating);
            }
            $saleProduct->avgRating = $avgRating;
        }
        return $saleProducts;
    }
    public function getTopRatedProducts()
    {
        $avgRating = 0;
        $topRatedProducts = $this->repository->getTopRatedProducts();
        foreach ($topRatedProducts as $topRatedProduct) {
            $sumRating = array_sum(array_column($topRatedProduct->productComments->toArray(), 'rating'));
            $countRating = count($topRatedProduct->productComments);
            if ($countRating != 0) {
                $avgRating = round($sumRating / $countRating);
            }
            $topRatedProduct->avgRating = $avgRating;
        }
        return $topRatedProducts;
    }

    public function getProductsOnIndex($request)
    {
        return $this->repository->getProductsOnIndex($request);
    }

    public function getProductsByCategory($categorySlug, $request)
    {
        return $this->repository->getProductsByCategory($categorySlug, $request);
    }
}
