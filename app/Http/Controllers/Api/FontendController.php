<?php

namespace App\Http\Controllers\Api;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCollection;
use App\Http\Controllers\Controller;
use App\Http\Resources\BannerResource;
use App\Http\Resources\CollectionResource;
use App\Http\Resources\ProductResource;

class FontendController extends Controller
{
    public function collection(Request $request)
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

    public function uicollection()
      {
        $product = Product::all();
        
       $collection = ProductCollection::orderBy('id' ,'desc') ->get();
    //  dd($collection);
         return view('ui.collection')->with('collections', $collection)
                                            ->with('$products', $product);  
      }

    public function collectionDetail($id)
     {
        $data = Product::with('productCollection')->find($id);

        $data = ProductCollection::with('products')->find($id);
        
        return new CollectionResource($data);
         
      }

    public function collectionddDetail()

        {
        $product = Product::all();
        
       $collection = ProductCollection::orderBy('id','desc')->get();
         return new CollectionResource($collection);
        }

    public function about()
     {
        return view('ui.about');
     }
   public function contact()
       {
        return view('ui.contact');
        }
    public function productall()
      {
        $product = Product::latest()->paginate(15);
        
        // return view('ui.products',)->with('products', $product);
        return new ProductResource($product);
      }

      public function banner()
      {
      
          $product = Banner::all();
           return BannerResource::collection($product);
      }

      public function product()
      {
      
          $product = Product::all();
           return ProductResource::collection($product);
      }

}
