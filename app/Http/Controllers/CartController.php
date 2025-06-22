<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;



class CartController extends Controller
{
    //

    public function index_products()
    {
        $index_products = Product::with(['category', 'brand', 'unit'])->get();

        return view('welcome', compact('index_products'));
    }

    public function show_products($id)
    {
        $product = Product::findOrFail($id);
        return view('product_details', compact('product'));
    }

    public function add_to_cart(Request $request)
{
    $product = Product::find($request->input('product_id'));

    $current_cart_item = [
        'product_id' => $product->id,
        'name' => $product->name,
        'price' => $product->price,
        'quantity' => 1,
        'total' => $product->price,
    ];
//                    key                  variable 
    session()->put('current_cart_item', $current_cart_item);

    return redirect()->route('cart.show_single');
}


public function show_single_cart_item()
{
    $cart_item = session()->get('current_cart_item');

    // Check if cart_item is null, redirect to the cart view if it is
    if (!$cart_item) {
        return redirect()->route('cart.show');
    }

    return view('add_cart', compact('cart_item'));
}



public function show_cart()
{
    $cart_items = Cart::with('product')->get();

    return view('cart', compact('cart_items'));
}


public function proceed_to_checkout(Request $request)
{
    $cart_item = session()->get('current_cart_item');

    if (!$cart_item) {
        return redirect()->route('cart.show');
    }

    // Get the quantity from the request
    $quantity = $request->input('quantity');
    $total = $cart_item['price'] * $quantity;

    // Update the cart item with the new quantity and total
    $cart_item['quantity'] = $quantity;
    $cart_item['total'] = $total;

    // Save the cart item to the database
    Cart::create([
        'product_id' => $cart_item['product_id'],
        'quantity' => $cart_item['quantity'],
        'total' => $cart_item['total'],
        'subtotal' => $cart_item['total'],
    ]);

    // Clear the current cart item from the session
    session()->forget('current_cart_item');

    // Redirect to the cart view to display all carted items
    return redirect()->route('cart.show');
}



public function delete_cart_item($id)
{
    Cart::where('id', $id)->delete();

    $cart_items = Cart::with('product')->get();
    return view('cart', compact('cart_items'));
}

public function order_now()
{
    $cart_items = Cart::with('product')->get();

    if ($cart_items->isEmpty()) {
        return redirect()->route('cart.show')->with('error', 'Your cart is empty.');
    }

    foreach ($cart_items as $item) {
        Order::create([
            'product_id' => $item->product_id,
            'quantity' => $item->quantity,
            'total' => $item->total,
        ]);
    }

    Cart::truncate();

    $orders = Order::with('product')->get();

    return view('order', compact('orders'));
}



    
}
