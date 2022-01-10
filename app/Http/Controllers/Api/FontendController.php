<?php

namespace App\Http\Controllers\Api;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\ProductCollection;
use App\Http\Controllers\Controller;
use App\Http\Resources\BannerResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\CollectionResource;
use App\Http\Resources\AnnouncementResource;
use Illuminate\Database\Eloquent\Builder;

class FontendController extends Controller
{

  public function collection()
      {
        
       $collection = ProductCollection::orderBy('id' ,'desc') ->get();
    //  dd($collection);
         return  CollectionResource::collection($collection);
      }

    public function test(Request $request)
     {

        $products = Product::latest() ->paginate(3);
        
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

    public function collectionShow(Request $request , $id) {
        $type = $request->type;
        $default = $request->default;
        $data = ProductCollection::with(['products' => function($query) use ($type, $default) {
          if($type == "price_hight_to_low") {
              return $query->orderBy('price', 'asc');
          }elseif($type == "price_low_to_hight") {
            return $query->orderBy('price', 'desc');
          }elseif($type == "date_old_new") {
              return $query->orderBy('created_at', 'asc');
          }elseif($type == "date_new_old") {
            return $query->orderBy('created_at', 'desc');
          }
        }])->find($id);
        // $data = ProductCollection::with('products')->find($id);
        return new CollectionResource($data);         
    }

    public function collectionddDetail(Request $request, $id)

        {
       $collection = ProductCollection::find($id);
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
        
        return view('ui.products',)->with('products', $product);
        return new ProductResource($product);
      }

      public function banner()
      {
      
          $product = Banner::all();
           return BannerResource::collection($product);
      }

      public function  product(Request $request)
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
        return response()->json([
          "data" => ProductResource::collection($products)
        ]);
      
          // $product = Product::latest() ->paginate(12);
          //  return ProductResource::collection($product);
      }

      /**
       * Home Page Route 
       */
      public function home()
      {
         $banner = Banner::all();
          $product = Product::all();
           return ProductResource::collection($product, $banner);
      }
      public function announcement(Request $request)
      {
        $announcement = Announcement::where('type',  $request->type  )->get();

          return AnnouncementResource::collection($announcement);
      }

}
