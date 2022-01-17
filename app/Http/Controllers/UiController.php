<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CollectionResource;
use App\Models\Banner;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Announcement;
use App\Models\ProductCollection;
use App\Http\Resources\AnnouncementResource;
use PhpParser\ErrorHandler\Collecting;

class UiController extends Controller
{
    public function home()

        {
            $product = Product::all();
            $banner = Banner::all();
            // $collection =  ProductCollection::orderBy('id' ,'desc') ->get();
            $announcements= Announcement::all();
            // $announcement = AnnouncementResource::where('type',  $request->type  )->get();
           $collection = ProductCollection::orderBy('id' ,'desc') ->take(5)->get();
   
             return view('ui.home')->with('collections', $collection)
                                                ->with('$products', $product)
                                                ->with('announcements', $announcements)
                                                ->with('banners', $banner); 
        }

        public function productCollection()
        {
            $product = Product::latest()->paginate(15);
            
           $collection = ProductCollection::orderBy('id','desc')->get();
   

        //  dd($product);
             return view('ui.pc')->with('collections', $collection)
                                            ->with('products', $product);      
                                                
            
        }

        public function collectionShow($id)
        {
                $data = Product::with('productCollection')->find($id);

                $data = ProductCollection::with('products')->find($id);

               $collection =  new CollectionResource($data);

              return view('ui.collection-details')->with('collections', $collection);      
        }

        public function productall()
        {
            $product = Product::latest()->paginate(5);

            return view('ui.products',)->with('products', $product);
        }

        public function productDetails($id){
            $products = Product::find($id);
            return view('ui.product-details',compact('products'));
        }
        // Cart Store
        public function store(Request $request)
        {  
            $qty = $request->quantity;
            $price = $request->price;
            $total = $qty * $price;
           $data = Cart::create([
                'product_id'=>$request->product_id,
                'user_id'=>$request->user_id,
                'quantity'=>$request->quantity,
                'price'     =>$request->price,
                'slug'      =>$total,
            ]);
            
        return redirect('/cart')->with('success','Added cart successfully.');
        }
        public function about()
        {
            return view('ui.about');
        }
       public function contact()
        {
            return view('ui.contact');
        }

        public function announcementAll(){

            $announcements = Announcement::latest()->paginate(15);
            
            return view('ui.announcement', compact('announcements'));	

        }


     
}
