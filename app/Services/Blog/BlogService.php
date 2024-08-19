<?php


namespace App\Services\Blog;



use App\Models\Blog;
use App\Repositories\Blog\BlogRepositoryInterface;
use App\Services\BaseService;


class BlogService extends BaseService implements BlogServiceInterface
{
    public $repository;
    public function __construct(BlogRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function getLatestBlogs($limit=3)
    {
        return $this->repository->getLatestBlogs($limit);
    }
}
