<?php

namespace App\Http\Controllers;

use App\Http\Resources\Ajax\ProductionCollectionResource;
use Illuminate\Http\Request;
use App\Models\ProductCollection;
use App\Models\Product;
use App\Http\Resources\CollectionResource;

class AjaxRequestController extends Controller
{
    public function ajaxRequest($type)
    {
        $data = ProductCollection::orderBy('price', 'asc')->get();   

        return $type;
    }
    public function hightToLow(Request $request, $id)
    {
        $collection = ProductCollection::find($id);
        // dd($collection);

        if ("price_hight_to_low" == $request->type) {
                   
                    return response()->json([
                        'data' =>  ProductionCollectionResource::collection($collection->products()->orderBy('price', 'asc')->get()),
                    ]);
        } elseif ("price_low_to_hight" == $request->type ) {
                
        return response()->json([
                    // 'data' =>  $collection->products()->orderBy('price', 'desc')->get(),
                    'data' =>  ProductionCollectionResource::collection($collection->products()->orderBy('price', 'desc')->get()),
                ]);
            }elseif("date_old_new"  ==$request->type){
                return response()->json([
                    'data' =>  ProductionCollectionResource::collection($collection->products()->orderBy('created_at', 'asc')->get()),
                ]);
            }else{
                return response()->json([
                    'data' =>  ProductionCollectionResource::collection($collection->products()->orderBy('created_at', 'desc')->get()),
                ]);
            }
            
        }
}   
