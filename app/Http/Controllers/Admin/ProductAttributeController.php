<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductAttribute;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{
    private $productService;
    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $product_id)
    {
        $product = $this->productService->find($product_id);
        $query = $product->productAttributes();
        $searchColumns = ['color', "size", "qty"];
        $searchTerm = $request->get('search');
        if ($searchTerm) {
            $query->where(function ($query) use ($searchTerm, $searchColumns) {
                foreach ($searchColumns as $column) {
                    $query->orWhere($column, 'like', "%{$searchTerm}%");
                }
            });
        }
        $productAttributes = $query->paginate(5);
        return view("admin.product.attribute.index", compact("product", "productAttributes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($product_id)
    {
        $product = $this->productService->find($product_id);
        return view("admin.product.attribute.create", compact("product"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $product_id)
    {
        $data = $request->all();
        ProductAttribute::create($data);
        $this->updateQty($product_id);
        return redirect()->route("attribute.index", $product_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $product_id, string $attribute_id)
    {
        $product = $this->productService->find($product_id);
        $attribute = ProductAttribute::find($attribute_id);
        return view("admin.product.attribute.edit", compact("product", "attribute"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $product_id, string $attribute_id)
    {
        $data = $request->all();
        ProductAttribute::find($attribute_id)->update($data);
        $this->updateQty($product_id);
        return redirect()->route("attribute.index", $product_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $product_id, string $attribute_id)
    {
        ProductAttribute::find($attribute_id)->delete();
        return redirect()->route("attribute.index", $product_id);
    }

    public function updateQty($product_id)
    {
        $product = $this->productService->find($product_id);
        $attribute = $product->productAttributes;
        $totalQty = array_sum(array_column($attribute->toArray(), "qty"));
        $this->productService->update($product_id, ["qty" => $totalQty]);
        return redirect()->route("attribute.index", $product_id);
    }
}
