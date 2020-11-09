<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    public function list()
    {
        $products = Product::take(8)->get();
        return response()->json($products);
    }

    
    public function kid()
    {
        $productKid = Product::where('categories_id', 3)->take(1)->get();
        return response()->json($productKid);
    }

    public function womenLimit()
    {
        $productWomen = Product::where('categories_id', 3)->take(1)->get();
        return response()->json($productWomen);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->categories_id = $request->input('categories_id');
        $product->marques_id = $request->input('marques_id');
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->getClientOriginalName();
            $request->image->move('product', $fileName);
            $product->image = 'product/' . $fileName;
        }
        if ($request->hasFile('image_one')) {
            $fileName = $request->file('image_one')->getClientOriginalName();
            $request->image_one->move('product', $fileName);
            $product->image_one = 'product/' . $fileName;
        }
        if ($request->hasFile('image_two')) {
            $fileName = $request->file('image_two')->getClientOriginalName();
            $request->image_two->move('product', $fileName);
            $product->image_two = 'product/' . $fileName;
        }
        if ($request->hasFile('image_three')) {
            $fileName = $request->file('image_three')->getClientOriginalName();
            $request->image_three->move('product', $fileName);
            $product->image_three = 'product/' . $fileName;
        }
        $product->save();

        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('editProduct', ['product' => $product]);
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
        $product = Product::find($id);
        
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->categories_id = $request->input('categories_id');
        $product->marques_id = $request->input('marques_id');
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->getClientOriginalName();
            $request->image->move('product', $fileName);
            $product->image = 'product/' . $fileName;
        }
        if ($request->hasFile('image_one')) {
            $fileName = $request->file('image_one')->getClientOriginalName();
            $request->image_one->move('product', $fileName);
            $product->image_one = 'product/' . $fileName;
        }
        if ($request->hasFile('image_two')) {
            $fileName = $request->file('image_two')->getClientOriginalName();
            $request->image_two->move('product', $fileName);
            $product->image_two = 'product/' . $fileName;
        }
        if ($request->hasFile('image_three')) {
            $fileName = $request->file('image_three')->getClientOriginalName();
            $request->image_three->move('product', $fileName);
            $product->image_three = 'product/' . $fileName;
        }
        $product->save();

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect('products');
    }
}
