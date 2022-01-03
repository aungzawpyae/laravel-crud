<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','details','price','category_id','image'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function productCollection()
    {
        return $this->belongsToMany(ProductCollection::class, 'product_with_collections');
    }
    
}
