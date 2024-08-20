<?php

namespace App\Services\Product;

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
        $products = $this->repository->getAll();
        foreach ($products as $product) {
            $product->avgRating = $this->repository->calculateAvgRating($product);
        }
        return $products;
    }

    public function find($id)
    {
        $product = $this->repository->find($id);
        $product->avgRating = $this->repository->calculateAvgRating($product);
        return $product;
    }

    public function getRelatedProducts($product, $limit = 10)
    {
        $relatedProducts = $this->repository->getRelatedProducts($product, $limit);
        foreach ($relatedProducts as $relatedProduct) {
            $relatedProduct->avgRating = $this->repository->calculateAvgRating($relatedProduct);
        }
        return $relatedProducts;
    }

    public function getFeaturedProducts()
    {
        $featuredProducts = $this->repository->getFeaturedProducts();
        foreach ($featuredProducts as $featuredProduct) {
            $featuredProduct->avgRating = $this->repository->calculateAvgRating($featuredProduct);
        }
        return $featuredProducts;
    }

    public function getNewArrivalProducts()
    {
        $newArrivalProducts = $this->repository->getNewArrivalProducts();
        foreach ($newArrivalProducts as $newArrivalProduct) {
            $newArrivalProduct->avgRating = $this->repository->calculateAvgRating($newArrivalProduct);
        }
        return $newArrivalProducts;
    }

    public function getSaleProducts()
    {
        $saleProducts = $this->repository->getOnSaleProducts();
        foreach ($saleProducts as $saleProduct) {
            $saleProduct->avgRating = $this->repository->calculateAvgRating($saleProduct);
        }
        return $saleProducts;
    }

    public function getTopRatedProducts()
    {
        $topRatedProducts = $this->repository->getTopRatedProducts();
        foreach ($topRatedProducts as $topRatedProduct) {
            $topRatedProduct->avgRating = $this->repository->calculateAvgRating($topRatedProduct);
        }
        return $topRatedProducts;
    }

    public function getProductsOnIndex($request)
    {
        $products = $this->repository->getProductsOnIndex($request);
        foreach ($products as $product) {
            $product->avgRating = $this->repository->calculateAvgRating($product);
        }
        return $products;
    }

    public function getProductsByCategory($categorySlug, $request)
    {
        $products = $this->repository->getProductsByCategory($categorySlug, $request);
        foreach ($products as $product) {
            $product->avgRating = $this->repository->calculateAvgRating($product);
        }
        return $products;
    }
}
