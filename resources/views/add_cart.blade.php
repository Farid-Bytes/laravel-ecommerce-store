<x-index_layout>
<div class="container">    
    <div class="col m-5">
        <h2>Your Cart</h2>
        <form action="{{ route('cart.proceed') }}" method="POST">
            @csrf
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($cart_item))
                        <tr>
                            <td>{{ $cart_item['name'] }}</td>
                            <td>
                                <input type="number" name="quantity" value="{{ $cart_item['quantity'] }}">
                            </td>
                            <td>{{ $cart_item['price'] }}</td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="3">No item found in the cart.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <button type="submit">Proceed</button>
        </form>
    </div>
</div>
</x-index_layout>
