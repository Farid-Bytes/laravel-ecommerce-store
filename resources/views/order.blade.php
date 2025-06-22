<x-index_layout>
    <div class="container">
        <div class="row">
            <div class="justify-content-center mb-5 m-auto col-8">
                <h2>Order Summary</h2>
                <table class="mb-5 mt-3">
                    <thead>
                        <tr>
                            <th style="width:0%;">Product</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $subtotal = 0;
                        @endphp

                        @foreach($orders as $order)
                            <tr>
                                <td>
                                    <img style="width: -webkit-fill-available; width:100%;" 
                                        src="{{ asset('storage/' . $order->product->picture) }}" 
                                        alt="{{ $order->product->name }}">
                                </td>
                                <td>{{ $order->product->name }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->total }}</td>
                            </tr>
                            @php
                                $subtotal += $order->total;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
                <h4>Total: ${{ number_format($subtotal, 2) }}</h4>
            </div>
        </div>
    </div>
</x-index_layout>
