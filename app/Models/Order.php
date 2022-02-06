<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory, \Illuminate\Database\Eloquent\SoftDeletes;
    protected $fillable =[
                'user_id',
                'amount',
                'phone',
                'address',
                'product_id',
                'price',
                'quantity',
                'code'
                
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
