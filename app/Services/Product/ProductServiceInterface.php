<?php

namespace App\Services\Product;

use App\Services\ServiceInterface;

interface ProductServiceInterface extends ServiceInterface
{
    public function getRelatedProducts($product, $limit = 10);
    public function getFeaturedProducts();
    public function getNewArrivalProducts();
    public function getSaleProducts();
    public function getTopRatedProducts();
    public function getProductsOnIndex($request);
    public function getProductsByCategory($categorySlug, $request);
}
