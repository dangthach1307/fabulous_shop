@extends('admin.layout.master')

@section('title', 'Product')

@section('content')
    <!-- Main -->
    <div class="app-main__inner">

        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>
                        Product
                        <div class="page-title-subheading">
                            View, create, update, delete and manage.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <form method="POST" action="{{ route("product.update", $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('admin.components.notification')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="position-relative row form-group">
                                        <label for="name" class="col-md-3 text-md-right col-form-label">Name</label>
                                        <div class="col-md-9 col-xl-8">
                                            <input required name="name" id="name" placeholder="Name" type="text"
                                                class="form-control" value="{{ $product->name }}">
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="content" class="col-md-3 text-md-right col-form-label">Content</label>
                                        <div class="col-md-9 col-xl-8">
                                            <textarea class="form-control" name="content" id="content" placeholder="content">{!! $product->content !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="description"
                                            class="col-md-3 text-md-right col-form-label">Description</label>
                                        <div class="col-md-9 col-xl-8">
                                            <textarea class="form-control" name="description" id="description" placeholder="Description">{!! $product->description !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative row form-group">
                                        <label for="brand_id" class="col-md-3 text-md-right col-form-label">Brand</label>
                                        <div class="col-md-9 col-xl-8">
                                            <select required name="brand_id" id="brand_id" class="form-control">
                                                <option value="">-- Brand --</option>
                                                @foreach ($brands as $brand)
                                                    <option {{ $brand->id == $product->brand_id ? 'selected' : '' }} value={{ $brand->id }}>
                                                        {{ $brand->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="category_id"
                                            class="col-md-3 text-md-right col-form-label">Category</label>
                                        <div class="col-md-9 col-xl-8">
                                            <select required name="category_id" id="category_id" class="form-control">
                                                <option value="">-- Category --</option>
                                                @foreach ($categories as $category)
                                                    <option {{ $category->id == $product->category_id ? 'selected' : '' }} value={{ $category->id }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="sku" class="col-md-3 text-md-right col-form-label">SKU</label>
                                        <div class="col-md-9 col-xl-8">
                                            <input required name="sku" id="sku" placeholder="SKU" type="text"
                                                class="form-control" value="{{ $product->sku }}">
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="price" class="col-md-3 text-md-right col-form-label">Price</label>
                                        <div class="col-md-9 col-xl-8">
                                            <input required name="price" id="price" placeholder="Price" type="text"
                                                class="form-control" value="{{ $product->price }}">
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="discount" class="col-md-3 text-md-right col-form-label">Discount</label>
                                        <div class="col-md-9 col-xl-8">
                                            <input required name="discount" id="discount" placeholder="Discount"
                                                type="text" class="form-control" value="{{ $product->discount }}">
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="tag" class="col-md-3 text-md-right col-form-label">Tag</label>
                                        <div class="col-md-9 col-xl-8">
                                            <input required name="tag" id="tag" placeholder="Tag" type="text"
                                                class="form-control" value="{{ $product->tag }}">
                                        </div>
                                    </div>

                                    <div class="position-relative row form-group">
                                        <label for="featured"
                                            class="col-md-3 text-md-right col-form-label">Featured</label>
                                        <div class="col-md-9 col-xl-8">
                                            <div class="position-relative form-check pt-sm-2">
                                                <input name="featured" id="featured" type="checkbox" value="1"
                                                    {{ $product->featured == 1 ? 'checked' : '' }}
                                                    class="form-check-input">
                                                <label for="featured" class="form-check-label">Featured</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative row form-group">
                                        <label for="status" class="col-md-3 text-md-right col-form-label">Status</label>
                                        <div class="col-md-9 col-xl-8">
                                            <select required name="status" id="status" class="form-control">
                                                <option value="">-- Level --</option>
                                                <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>In
                                                    active</option>
                                                <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>
                                                    Active</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative row form-group mb-1">
                                <div class="col-md-9 col-xl-8 offset-md-2">
                                    <a href="{{ route('product.index') }}" class="border-0 btn btn-outline-danger mr-1">
                                        <span class="btn-icon-wrapper pr-1 opacity-8">
                                            <i class="fa fa-times fa-w-20"></i>
                                        </span>
                                        <span>Cancel</span>
                                    </a>

                                    <button type="submit" class="btn-shadow btn-hover-shine btn btn-primary">
                                        <span class="btn-icon-wrapper pr-2 opacity-8">
                                            <i class="fa fa-download fa-w-20"></i>
                                        </span>
                                        <span>Save</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main -->
    <script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.config.versionCheck = false;
        CKEDITOR.replace('description');
        CKEDITOR.replace('content');
    </script>
@endsection
