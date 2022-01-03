<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CollectionResource;
use App\Models\Banner;
use App\Models\Product;
use App\Models\ProductCollection;
use PhpParser\ErrorHandler\Collecting;

class UiController extends Controller
{
    public function collection()

        {
            $product = Product::all();
            $banner = Banner::all();
            
           $collection = ProductCollection::orderBy('id' ,'desc') ->limit(3)->get();
        //  dd($collection);
             return view('ui.home')->with('collections', $collection)
                                                ->with('$products', $product)      
                                                ->with('banners', $banner);
                                              

            
        }

        public function uicollection()

        {
            $product = Product::all();
            
           $collection = ProductCollection::orderBy('id' ,'desc') ->get();
        //  dd($collection);
             return view('ui.collection')->with('collections', $collection)
                                                ->with('$products', $product);  
        }

    public function collectionShow($id)
        {
            $data = Product::with('productCollection')->find($id);

            $data = ProductCollection::with('products')->find($id);

        $collection =  new CollectionResource($data);

        return view('ui.collection-details')->with('collections', $collection);      
        }

        public function productCollection()

        {
            $product = Product::all();
            
           $collection = ProductCollection::orderBy('id','desc')->get();
   

        //  dd($product);
             return view('ui.pc')->with('collections', $collection)
                                            ->with('products', $product);      
                                                
            
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
            $product = Product::latest()->paginate(5);
            
            return view('ui.products',)->with('products', $product);
        }
}
