<x-index_layout>
    <div class="container">
        <div class="row">
            <div class="justify-content-center mb-5 mx-auto">
<h1>{{ $product->name }}</h1>

<img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}" style="width:300px;height:auto;">
<p>{{ $product->description }}</p>
<p><strong>Category:</strong> {{ $product->category->name }}</p>
<p><strong>Brand:</strong> {{ $product->brand->name }}</p>
<p><strong>Unit:</strong> {{ $product->unit->name }}</p>
<p><strong>Price:</strong> {{ $product->price }}</p>

<a href="{{ url('/') }}" class="btn btn-secondary">Back to Products</a>

</div>
</div>
</div>
</x-index_layout>