<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Retrieve all products
        $products = Product::all();
        
        return view('products.index', compact('products'));
       
    }

    public function productshow()
    {
        // Retrieve all products
        $products = Product::all();
        
        return view('products.productshow', compact('products'));
       
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
        ]);

        Product::create($validatedData);

        return redirect(route('products.index'))->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
        ]);

        $product->update($validatedData);

        return redirect(route('products.index'))->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('products.index'))->with('success', 'Product deleted successfully.');
    }

    public function purchase($id)
    {
        // Logic to handle the purchase action
        // Retrieve the product using the $id
        // Add the product to the shopping cart or perform any other necessary actions

        return redirect()->back()->with('success', 'Product purchased successfully!');
    }

}