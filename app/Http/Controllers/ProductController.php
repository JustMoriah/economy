<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::paginate(10);
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product=new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        Alert::success('Product Created','Product has been added successfully!');
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     */
    public function show($product)
    {
        $product=Product::find($product);
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $product)
    {
        $product=Product::find($product);
        return view('/product/edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $product)
    {
        $product=Product::find($product);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        Alert::success('Producted Edited','Product has been edited successfully!');
        return redirect("/product/{$product->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product)
    {
        $product=Product::find($product);
        $product->delete();
        Alert::success('Product Deleted!','Product has been deleted successfully!');
        return redirect("/product");
    }
}
