<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Product\CreateRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Banner;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Order $order)
    {
        
        $products = Product::with(['category', 'orders'])
                        ->latest()
                        ->paginate(15);
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('product.create')->with('categories',Category::all());;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        
       $product = $request->all();  
       $filename = time() . '.' . $request->image->extension();
       $name = $request->file('image')->getClientOriginalName();
       $product_img = $request->file('image')->store('/public/products');

            Product::create([
                'name'=>$request->name,
                'details'=>$request->details,
                'price'=>$request->price,
                'category_id'=>$request->category_id,
                'image'=>$product_img,
            ]);
       
        return redirect()->route('product.index')
                        ->with('success','Product created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'))->with('categories', Category::all());

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'))->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Product $product)
    {
        // $product = Product::find($product);
        $input = $request->all();
        if($request->file('image')){
            $filename = time() . '.' . $request->image->extension();
            $name = $request->file('image')->getClientOriginalName();
            Storage::delete($product->image);
            $product_img = $request->file('image')->store('/public/products');
            
         }
         
        $data = [
            'name'       =>$request->name,
            'details'    =>$request->details,
            'price'      =>$request->price,
            'category_id'=>$request->category_id,
            'image'      =>$product_img,
            "slug"       =>Str::slug($name),
        
        ];
    

        $product->update($data);
     return redirect()->route('product.index')
                      ->with('success', 'Product Updated Successfully!');


    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {  
        Storage::delete($product->image);
        $product->delete();
        return redirect()->route('product.index')
                        ->with('success','Product deleted successfully');
    }


}
