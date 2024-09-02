<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Brand\BrandServiceInterface;
use App\Services\Category\CategoryServiceInterface;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    private $productService;
    private $brandService;
    private $categoryService;

    public function __construct(ProductServiceInterface $productService, BrandServiceInterface $brandService, CategoryServiceInterface $categoryService)
    {
        $this->productService = $productService;
        $this->brandService = $brandService;
        $this->categoryService = $categoryService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $products = $this->productService->searchAndPaginate("name", $request->get('search'));
        return view("admin.product.index", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $brands = $this->brandService->getAll();
        $categories = $this->categoryService->getAll();
        return view('admin.product.create', compact('brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        // dd($data);
        $data['slug'] = Str::slug($data['name'], '-');
        $data['qty'] = 0;
        $product = $this->productService->create($data);
        return redirect()->route('product.show', $product->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = $this->productService->find($id);
        return view("admin.product.show", compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = $this->productService->find($id);
        $brands = $this->brandService->getAll();
        $categories = $this->categoryService->getAll();
        return view("admin.product.edit", compact('product', 'brands', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->all();
        $data['slug'] = Str::slug($data['name'], '-');
        $this->productService->update($id, $data);
        return redirect()->route('product.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $this->productService->delete($id);
        return redirect()->route('product.index');
    }
}
