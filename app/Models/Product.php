<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'product';

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'name', 'categoryId', 'slug',
        'stock', 'qual', 'price', 'image'
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'category_id', 'categoryId');
    }

    public function scopeById($query, $product_id)
    {
        return $query->where('product.product_id', $product_id);
    }

    public function scopeBySlug($query, $slug)
    {
        return $query->where('product.slug', $slug);
    }

    public function scopeByCategory($query, $category)
    {
        return is_array($category) 
            ? $query->whereIn('product.categoryId', $category)
            : $query->where('product.categoryId', $category); 
    }

    public function scopeWithStock($query)
    {
        return $query->where('product.stock', '>', 0);
    }

}
