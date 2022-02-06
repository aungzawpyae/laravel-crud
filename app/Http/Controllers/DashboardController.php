<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Product $product, Category $category, Announcement $announcement, Banner $banner, ProductCollectionController $productCollectionController, Order $order)
    {

      
        
        
        // $leftProduct = $product->count() - $order->count();
        // dd($leftProduct);
        
        return view('dashboard')->with('product',$product,)
                                ->with('order', $order)                                      
        ;
    }
}
