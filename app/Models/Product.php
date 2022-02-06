<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Veelasky\LaravelHashId\Eloquent\HashableId;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name','details','price','category_id','image','slug'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function productCollection()
    {
        return $this->belongsToMany(ProductCollection::class, 'product_with_collections');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getRemaningItemAttribute()
    {
        $items = 0;
        foreach ($this->orders as $order) {
            $items += $order->quantity; 
        }

        return $this->quantity - $items;
    }
    
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function scopeFilter($q, $filters)
    {
        $q->when($filters['search'] ?? false, fn($q, $search) =>
            $q->where(fn($q) =>
                $q->where('name_en', 'like', '%' . $search . '%')
                    ->orwhere('name_mm', 'like', '%' . $search . '%')
                    ->orWhere('details_mm', 'like', '%' . $search . '%')
                    ->orWhere('details_en', 'like', '%' . $search . '%')
            )   
        );

        $q->when($filters['category'] ?? false, fn($q, $category) =>
            $q->whereHas('category', fn ($q) =>
                $q->where('id', $category)
            )
        );

    }

    // public function getNameAttribute()
    // {
    //     return $this->{'name_' . session('locale')};
    // }

    // public function getDetailsAttribute()
    // {
    //     return $this->{'details_' . session('locale')};
    // }

 
    
}
