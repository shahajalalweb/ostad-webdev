<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Adjust namespace and model name based on your project structure

class ProductController extends Controller
{
    public function index()
    {
        // Fetch all products from the database
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        // Show form to create a new product
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validate form data
        // Save the product to the database
        // Redirect back or to the product's page
    }

    public function show($id)
    {
        // Fetch a specific product and display its details
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        // Show form to edit a specific product
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validate form data
        // Update the product in the database
        // Redirect back or to the product's page
    }

    public function destroy($id)
    {
        // Delete a specific product from the database
        // Redirect back or to the products index page
    }
}