<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\Brand\BrandServiceInterface;
use App\Services\Category\CategoryServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $productService;
    private $productCommentService;
    private $categoryService;
    private $brandService;
    public function __construct(
        ProductServiceInterface $productService,
        ProductCommentServiceInterface $productCommentService,
        CategoryServiceInterface $categoryService,
        BrandServiceInterface $brandService
    ) {
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;
        $this->categoryService = $categoryService;
        $this->brandService = $brandService;
    }


    public function show($id)
    {
        $product = $this->productService->find($id);
        $relatedProducts = $this->productService->getRelatedProducts($product);
        return view('front.shop.show', compact('product', 'relatedProducts'));
    }
    public function postComment(Request $request)
    {
        $data = $request->except('_token');
        $this->productCommentService->create($data);
        return redirect()->back();
    }
    public function index(Request $request)
    {
        $categories = $this->categoryService->getAll();
        $brands = $this->brandService->getAll();
        $products = $this->productService->getProductsOnIndex($request);
        $data = [
            "products" => $products,
            "categories" => $categories,
            "brands" => $brands
        ];
        return view("front.shop.index", $data);
    }
    public function category($categorySlug, Request $request)
    {
        $categories = $this->categoryService->getAll();
        $brands = $this->brandService->getAll();
        $products = $this->productService->getProductsByCategory($categorySlug, $request);
        $data = [
            "products" => $products,
            "categories" => $categories,
            "brands" => $brands
        ];
        return view("front.shop.index", $data);
    }
}
