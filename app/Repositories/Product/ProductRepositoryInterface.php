<?php

namespace App\Repositories\Product;

use App\Repositories\RepositoryInterface;
use Illuminate\Http\Request;

interface ProductRepositoryInterface extends RepositoryInterface
{
    public function getRelatedProducts($product, $limit = 10);
    public function getFeaturedProducts();
    public function getNewArrivalProducts($limit = 10);
    public function getOnSaleProducts($limit = 4);
    public function getTopRatedProducts($limit = 4);
    public function getProductsOnIndex($request);
    public function getProductsByCategory($categorySlug,$request);
    public function calculateAvgRating($product);
}
