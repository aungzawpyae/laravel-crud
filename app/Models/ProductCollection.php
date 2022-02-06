<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCollection extends Model
{
    use HasFactory;

    protected $table='product_collections';

    protected $fillable = [
        'name','active','slug'
    ];
    protected $casts = [
        'active' => 'boolean',
        // 'product_id' => 'json',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, ProductWithCollection::class, 'product_collection_id');
    }

    public function productLimits()
    {
        return $this->belongsToMany(Product::class, ProductWithCollection::class, 'product_collection_id')->limit(4);
    }
   
   
    

    // public function getProductIdAttribute()
    // {
    //     return json_decode($this->$product);
    // }
}
