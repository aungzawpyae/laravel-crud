<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCollection extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','product_id','active'
    ];

    public function products()
    {
        
            return $this->belongsToMany(Product::class, 'product_with_collections');
        
    }

    protected $casts = [
            'active' => 'boolean',
            // 'product_id' => 'json',
    ];
    

    // public function getProductIdAttribute()
    // {
    //     return json_decode($this->$product);
    // }
}
