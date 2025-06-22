<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Unit;

class ProductController extends Controller
{
    // Display all products
    public function get_products()
{
    $products = Product::with(['category', 'brand', 'unit'])->get();
    return view('product', ['products' => $products]);
}
    // Show the form for adding a new product
    public function show_add_product_form()
{
    $categories = Category::all();
    $brands = Brand::all();
    $units = Unit::all();
    return view('add-product', compact('categories', 'brands', 'units'));
}

    // Insert a new product
    public function insert_product(Request $req)
    {
        Product::create([
            'name' => $req->name,
            'description' => $req->description,
            'category_id' => $req->category_id,
            'brand_id' => $req->brand_id,
            'unit_id' => $req->unit_id,
            'picture' => $req->picture->store('pictures', 'public'),
            'price' => $req->price,
        ]);

        return redirect('/admin/products');
    }

    // Show the form for editing an existing product
    public function show_edit_product_form($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        $units = Unit::all();
        return view('edit-product', compact('product', 'categories', 'brands', 'units'));
    }

    // Update an existing product
    public function update_product(Request $req, $id)
    {
        $product = Product::find($id);
        $product->update([
            'name' => $req->name,
            'description' => $req->description,
            'category_id' => $req->category_id,
            'brand_id' => $req->brand_id,
            'unit_id' => $req->unit_id,
            'picture' => $req->picture ? $req->picture->store('pictures', 'public') : $product->picture,
            'price' => $req->price,
        ]);

        return redirect('/admin/products');
    }

    // Delete a product
    public function delete_product($id)
    {
        $product = Product::where('id' , $id)->delete();
        return redirect('/admin/products');
    }

    // public function show($id)
    // {
    //     $product = Product::findOrFail($id);
    //     return view('show', compact('product'));
    // }

   
}