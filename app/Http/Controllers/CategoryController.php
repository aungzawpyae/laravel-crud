<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::latest()->paginate(10);
    
        return view('category.index')->with('categories',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           ]);
    
           $image = $request->file('image')->store('public/category');
           
           $data = [
            'name' => $request->input('name'),
            'image' => $image,
           ];

           Category::create($data);
           return redirect()->route('category.index')
                        ->with('success','Category created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
            return view('category.show')
            ->with('category',$category)
            ->with('categories',Category::all())
            ->with('products', $category->products()->paginate(5));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        // return "Edit Cat";
        return view('category.edit')->with('category', $category);
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
        $category = Category::find($id);
        $request->validate([
            'name' => 'nullable|required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            
        ]);
        if($request->file('image')){
            $filename = time() . '.' . $request->image->extension();
            $name = $request->file('image')->getClientOriginalName();
            Storage::delete($category->image);
            $category_img = $request->file('image')->store('public/category');
         }
         
        $data = [
            'name'=>$request->name,
            // 'image'=>$request->category_img,
        
        ];

        $category->update($data);
     return redirect()->route('category.index')
                      ->with('success', 'Category Updated Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        Storage::delete($category->image);
        $category->delete();

        return redirect()->route('category.index')
                                 ->with('success', 'Category Delete Successfull');
    }
}
