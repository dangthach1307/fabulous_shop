<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $productService;
    private $blogService;
    public function __construct(ProductServiceInterface $productService, BlogServiceInterface $blogService)
    {
        $this->productService = $productService;
        $this->blogService = $blogService;
    }
    public function index()
    {
        //products
        $featuredProducts = $this->productService->getFeaturedProducts();
        $newArrivalProducts = $this->productService->getNewArrivalProducts();
        $onSaleProducts = $this->productService->getSaleProducts();
        $topRatedProducts = $this->productService->getTopRatedProducts();

        //blog
        $latestBlogs = $this->blogService->getlatestBlogs();

        $data = [
            "featuredProducts"=> $featuredProducts,
            "newArrivalProducts"=> $newArrivalProducts,
            "onSaleProducts"=> $onSaleProducts,
            "topRatedProducts"=> $topRatedProducts,
            "latestBlogs"=> $latestBlogs,
        ];

        return view("front.index", $data);
    }
}
