<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cart extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'user_id','product_id','slug','quantity','price'
    ];
    protected $dates = ['deleted_at'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }


}
