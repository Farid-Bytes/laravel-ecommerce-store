<x-index_layout>
    <div class="container">
        <div class="row">
            <div class="justify-content-center mb-5 m-auto col-8">
                <h2>Cart Summary</h2>
                <table class="mb-5 mt-3 ">
                    <thead>
                        <tr>
                            <th style="width:0%;">Product</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $subtotal = 0;
                        @endphp

                        @foreach($cart_items as $item)
                            <tr>
                                <td>
                                    <img style="width: -webkit-fill-available; width:100%;" 
                                        src="{{ asset('storage/' . $item->product->picture) }}" 
                                        alt="{{ $item->product->name }}">
                                </td>
                                <td>{{ $item->product->name }}</td> 
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->total }}</td>
                                <td>
                                    <form action="{{ route('cart.delete', $item->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>                               
                                </td>
                            </tr>
                            @php
                                $subtotal += $item->total;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-4 p-5">
                <h4>Total: ${{ number_format($subtotal, 2) }}</h4>
                <form action="{{ route('cart.order_now') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Order Now</button>
                </form>

            </div>
        </div>
    </div>
</x-index_layout>
