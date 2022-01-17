<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function cartList()
    {
       
        $carts = Cart::all();
        $count = DB::table('carts')->where('user_id' , Auth::user()->id)->count();
        return view('ui.carts.index', compact('carts','count'));
        
    }
    // public function update(Request $request, $id){
    //    $cart = Cart::find($id);
    //    $data  = [
    //         'quantity'=>$request->quantity,
    //     ];
    //     $cart->create($data);
    // return redirect('/cart/show')->with('success','Added cart successfully.');  
    // }

    public function destroy($id)
    {
        $cart = Cart::find($id);
        // dd($cart->id);
        $cart->delete();

        return redirect('/cart') ->with('success', 'Cart Deleted Successfully!');

    }
// Order Store
    public function store(Request $request){

            $data = [
                            'user_id'=>$request->user_id,
                            'amount'=>$request->amount,
                        
                        ];
                        
                Order::create($data);
                        
                    return redirect('/success');
     }  
}
