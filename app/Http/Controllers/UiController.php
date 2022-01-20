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
         /**
         * 
         *  Home Page Show Data
         *
         **/
        {
            $banners = Banner::where('active', 1)->get();

            $announcements= Announcement::all();
            
            $collections = ProductCollection::orderBy('id' ,'desc')->take(3)->get();

            return view('ui.home', compact('banners','collections','announcements'));
          
         }


    public function collection()
          /**
         * 
         *  Collection List 
         *
         **/
        {
            $product = Product::latest()->paginate(15);
                
            $collection = ProductCollection::orderBy('id','desc')->get();
    
            return view('ui.pc')->with('collections', $collection)
                                                ->with('products', $product);      
                                                
            
        }

    public function collectionShow($id)
        /**
         * 
         *  Collection Deatils with product
         *
         **/
        {
            $data = Product::with('productCollection')->find($id);

            $data = ProductCollection::with('products')->find($id);
            // dd($data);
            $collection =  new CollectionResource($data);
            // dd($collection);
            return view('ui.collection-details')->with('collections', $collection);      
        }

    public function productall()
        {
            $product = Product::latest()->paginate(16);
            
            return view('ui.products',)->with('products', $product);
        }

    public function productDetails($id)
        {
            $products = Product::find($id);
            return view('ui.product-details',compact('products'));
        }
        /**
        * 
        *  Home Page Show Data
        *
        **/
    public function store(Request $request)
        {  
            $oldCart = Cart::where('user_id', $request->user_id)->where('product_id', $request->product_id)->latest()->first();

                if ($oldCart) {
                    $oldCart->quantity += $request->quantity;
                    $oldCart->save();
                } else {
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
                }
                
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
