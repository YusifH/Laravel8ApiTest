<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('product', ['data' => $data]);
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product);
    }
    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        return response()->json([
            'success' => 'Mehsul silindi'
        ]);
    }


    public function like(Request $request, $id)
    {
        $product_liked = Like::find($id);
        $product_id = $id;
        $like_count = Like::where('product_id', '=', $product_id)->count();
            $product_like = new Like();
            $product_like->product_id = $product_id;
            $product_like->save();
            return response()->json([
                'success' => 'Mehsul like edildi'
            ]);
      
    }
    /*  public function update(Request $request, $id)
   
    {
        $product = Product::find($id);
        $updated = $product->fill($request->all())->save();
        
    } */
}
