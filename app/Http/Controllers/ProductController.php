<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
 
        return response()->json([
            'success' => true,
            'data' => $products
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
   /*  public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $updated = $product->fill($request->all())->save();
        
    } */
}
