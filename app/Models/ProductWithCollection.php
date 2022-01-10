<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductWithCollection extends Model
{
    use HasFactory;

    protected $table='product_with_collections';

    protected $fillable = 
    [
        'product_id',
        'product_collection_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function collection()
    {
        return $this->belongsTo(ProductCollection::class, 'product_collection_id');
    }
}
