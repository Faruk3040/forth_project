<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Product::paginate(3);
        return view('frontend.products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $product->name = $request->has('name')? $request->get('name'):'';
        $product->price = $request->has('price')? $request->get('price'):'';
        $product->amount = $request->has('amount')? $request->get('amount'):'';
        $product->details = $request->has('details')? $request->get('details'):'';
        $product->category_id = $request->has('category_id')? $request->get('category_id'):'';
        $product->is_active = 1;

        if($request->hasFile('images')){
            $files = $request->file('images');

            $imageLocation = array();
            $i=0;
            foreach($files as $file){
                $extension = $file->getClientOriginalExtension();
                $fileName = 'product_' . time() . ++$i . '.' . $extension;
                $location = '/images/uploads/';
                $file->move(public_path() . $location, $fileName);
                $imageLocation[] = $location. $fileName;
            }

            $product->image = implode('|', $imageLocation);
            $product->save();
            return back()->with('success','product successfully added!');
        }else{
            return back()->with('error','something has wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $images = explode('|', $product->image);
        $related_products = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->limit(3)->get();
        return view('frontend.product_details',compact('product','images','related_products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function addProduct()
    {
        $products = Product::get();
        $returnProducts = array();

        foreach($products as $product){

            $images = explode('|', $product->image);

            $returnProducts[] = [
                'name' => $product->name,
                'price' => $product->price,
                'amount' => $product->amount,
                'details' =>$product->details,
                'category_id' => $product->category_id,
                'image' => $images[0],
            ];
        }

        return view('backend.add_product', compact('returnProducts'));
    }
}