<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $productService, $productCommentService;
    public function __construct(ProductServiceInterface $productService, ProductCommentServiceInterface $productCommentService)
    {
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;
    }

    public function show($id)
    {
        $product = $this->productService->find($id);
        $relatedProducts = $this->productService->getRelatedProducts($product);
        return view('front.shop.show', compact('product','relatedProducts'));
    }
    public function postComment(Request $request)
    {
        $data = $request->except('_token');
        $this->productCommentService->create($data);
        return redirect()->back();
    }
}
