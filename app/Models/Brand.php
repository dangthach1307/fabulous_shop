<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = "brands";
    protected $primary = "id";
    protected $guarded = [];
    protected $fillable = [
        'name',
        'slug',
        'image',
        'image',
        'meta_description',
        'meta_keywords',
        'tag',
        'status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }
}
