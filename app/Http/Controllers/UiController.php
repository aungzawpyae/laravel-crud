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
            $products = Product::latest()->get();

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
    
            return view('ui.pc')
                                ->with('collections', $collection)
                                ->with('products', $product);      
                                                
            
        }

    public function collectionShow($slug)
        /**
         * 
         *  Collection Deatils with product
         *
         **/
        {
            // $data = Product::with('productCollection')->find($slug);

            $data = ProductCollection::with('products')->firstWhere('slug', $slug);
            // dd($data);
            $collections =  new CollectionResource($data);
        
            $collection = ProductCollection::latest()->get();
            
            return view('ui.collection-details', 
            [ 
                'collection' => $collection,
                'collections' => $collections
            ]);      
        }

    public function productall()
        {
            $product = Product::latest()->paginate(16);
            
            return view('ui.products',)->with('products', $product);
        }

    public function productDetails(Product $product)
        {
            return view('ui.product-details',compact('product'));
        }
        /**
        * 
        *  Cart Store
        *
        **/
    public function store(Request $request)
    {  

        // dd($request);
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

// Product Search
    public function search(Request $request){
      
        // Get the search value from the request
        // $search = $request->input('search');
        
        // Search in the title and body columns from the posts table
        // $products = Product::latest()
        //     ->where('name', 'LIKE', "%{$search}%")
        //     ->orWhere('details', 'LIKE', "%{$search}%")
        //     ->paginate(15);
        // dd($products);
        // Return the search view with the resluts compacted

        //  Search Array with Filter Methods 
        $products = Product::latest()->filter(request(['search', 'category',]))->paginate();
        $currentCategory = Category::firstWhere('id', request('category'));
       
        // dd($currentCategory);
        return view('ui.search', compact('products','currentCategory'));
    }
}
