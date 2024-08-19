<?php

namespace App\Providers;

use App\Repositories\Blog\BlogRepository;
use App\Repositories\Blog\BlogRepositoryInterface;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\ProductComment\ProductCommentRepository;
use App\Repositories\ProductComment\ProductCommentRepositoryInterface;
use App\Services\Blog\BlogService;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Category\CategoryService;
use App\Services\Category\CategoryServiceInterface;
use App\Services\Product\ProductService;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductComment\ProductCommentService;
use App\Services\ProductComment\ProductCommentServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //category`
        $this->app->singleton(
            CategoryRepositoryInterface::class,
            CategoryRepository::class,
        );
        $this->app->singleton(
            CategoryServiceInterface::class,
            CategoryService::class,
        );
        //product
        $this->app->singleton(
            ProductRepositoryInterface::class,
            ProductRepository::class,
        );
        $this->app->singleton(
            ProductServiceInterface::class,
            ProductService::class,
        );
        //productComment
        $this->app->singleton(
            ProductCommentRepositoryInterface::class,
            ProductCommentRepository::class,
        );
        $this->app->singleton(
            ProductCommentServiceInterface::class,
            ProductCommentService::class,
        );
        //blog
        $this->app->singleton(
            BlogRepositoryInterface::class,
            BlogRepository::class,
        );
        $this->app->singleton(
            BlogServiceInterface::class,
            BlogService::class,
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
