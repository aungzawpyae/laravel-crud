<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use App\Http\Controllers\Controller;

use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders  =   Order::all();

        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $carts = Cart::select('id')->where('user_id' , Auth::user()->id)->get();
        return view('order.create', compact('carts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach($request->carts as $cart) {
            $temp = Cart::find($cart);
            // dd($temp);
            $data = [
                'user_id'=> auth()->user()->id,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'product_id'=>$temp->product_id,
                'price'     =>$temp->price,
                'quantity'  =>$temp->quantity,
                'amount'  => $temp->price * $temp->quantity,
                  
                ];
                        
            if (Order::create($data)) {
                $temp->delete();
            }
        }
       
        return redirect('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::FindOrFail($id);
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $order = Order::findOrFail($id);
    //    dd($request->status);
       $data = [
           'status' => $request->status,
       ];
       $order->status = $request->status;
       $order->save();
       
       return redirect()->route('order.index')->with('success','Update Order successfully.');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
