<?php

namespace App\Repositories\Product;

use App\Models\Category;
use App\Models\Product;

use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function getModel()
    {
        return Product::class;
    }
    public function getRelatedProducts($product, $limit = 10)
    {
        return $this->model->where('category_id', $product->category_id)
            ->where('tag', $product->tag)
            ->where('id', '!=', $product->id)->limit($limit)->get();
    }

    public function getFeaturedProducts($limit = 10)
    {
        return $this->model->where('featured', true)->where('status', 1)->limit($limit)->get();
    }
    public function getNewArrivalProducts($limit = 4)
    {
        return $this->model
            ->where('status', 1)
            ->orderBy('created_at', 'desc')
            ->limit($limit)
            ->get();
    }



    public function getOnSaleProducts($limit = 4)
    {
        return $this->model->where('discount', '!=', null)->where('status', 1)->limit($limit)->get();
    }
    public function getTopRatedProducts($limit = 4)
    {
        return $this->model->select('products.*')
            ->join('product_comments', 'products.id', '=', 'product_comments.product_id')
            ->where('products.status', 1)
            ->groupBy('products.id')
            ->orderByRaw('AVG(product_comments.rating) DESC')
            ->limit($limit)->get();
    }

    public function getProductsOnIndex($request)
    {
        $search = $request->search ?? '';
        $products = $this->model->where('name', 'like', '%' . $search . '%');
        $products = $this->filter($products, $request);
        $products = $this->sortAndPaginate($products, $request);
        return $products;
    }

    public function getProductsByCategory($categorySlug, $request)
    {
        $products = Category::where('slug', $categorySlug)->first()->products->toQuery();
        // dd($products);
        $products = $this->filter($products, $request);
        $products = $this->sortAndPaginate($products, $request);
        return $products;
    }
    public function calculateAvgRating($product)
    {
        $sumRating = $product->productComments->sum('rating');
        $countRating = $product->productComments->count();

        return $countRating != 0 ? round($sumRating / $countRating) : 0;
    }

    private function sortAndPaginate($products, $request)
    {
        $perPage = $request->show ?? 4;
        $sortBy = $request->sort_by ?? 'latest';
        switch ($sortBy) {
            case 'latest':
                $products = $products->orderBy('created_at');
                break;
            case 'oldest':
                $products = $products->orderByDesc('created_at');
                break;
            case 'name-asc':
                $products = $products->orderBy('name');
                break;
            case 'name-desc':
                $products = $products->orderByDesc('name');
                break;
            case 'price-asc':
                $products = $products->orderBy('price');
                break;
            case 'price-desc':
                $products = $products->orderByDesc('price');
                break;
            default:
                $products = $products->orderBy('created_at');
                break;
        }
        $products = $products->paginate($perPage);
        $products->appends(['show' => $perPage, 'sort_by' => $sortBy]);
        return $products;
    }
    private function filter($products, Request $request)
    {
        //Brands:
        $brands = $request->brand ?? [];
        $brand_ids = array_keys($brands);
        $products = $brand_ids != null ? $products->whereIn('brand_id', $brand_ids) : $products;

        //Price:
        $priceMin = $request->price_min;
        $priceMax = $request->price_max;
        $priceMin = str_replace('$', '', $priceMin);
        $priceMax = str_replace('$', '', $priceMax);
        $products = ($priceMin != null && $priceMax != null) ? $products->whereBetween('price', [$priceMin, $priceMax]) : $products;

        //Color:
        $color = $request->color;
        $products = $color != null ? $products->whereHas('productAttributes', function ($q) use ($color) {
            return $q->where('color', $color)->where('qty', '>', 0);
        }) : $products;

        //Size:
        $size = $request->size;
        $products = $size != null ? $products->whereHas('productAttributes', function ($q) use ($size) {
            return $q->where('size', $size)->where('qty', '>', 0);
        }) : $products;

        return $products;
    }
}
