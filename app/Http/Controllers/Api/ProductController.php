<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Http\Resources\CollectionResource;
use App\Models\Banner;
use App\Models\Product;
use App\Models\ProductCollection;

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


    public function productAll()
        {

           $product = Product::all();
            return ProductResource::collection($product);
        }
    public function banner()
        {
        
            $product = Banner::all();
             return ProductResource::collection($product);
        }

    public function collection()
        {
            $product = Product::all();
            $banner = Banner::all();
            
        //    $collection = ProductCollection::orderBy('id' ,'desc') ->limit(3)->get();
           return ProductCollection::orderBy('id' ,'desc') ->limit(3)->get();
        }

    public function  collectionShow($id)
        {
            $data = Product::with('productCollection')->find($id);

            $data = ProductCollection::with('products')->find($id);

            return new CollectionResource($data);
         }
      
    
}
