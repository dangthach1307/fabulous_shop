<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = "blogs";
    protected $primary = "id";
    protected $guard = [];

    public function blogComments()
    {
        return $this->hasMany(BlogComment::class, 'blog_id', 'id');
    }
}
