<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');
        $category_id = $request->input('category_id');
        $perPage = $request->input('perPage');

        $products = Product::when($name, function($q) use($name){
                        $q->where('name', 'ilike', '%'.$name.'%');
                    })
                    ->when($category_id, function($q) use($category_id){
                        $q->where('category_id', $category_id);
                    })
                    ->latest()
                    ->paginate($perPage);
        
        return ProductResource::collection($products);
    }

     public function show(Request $request, $id)
    {
        $product = Product::find($id);
        
        return new ProductResource($product);
    }
}
