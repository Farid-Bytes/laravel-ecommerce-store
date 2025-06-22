<x-layout>
   <div> 
    <h1 class="d-inline">All Products</h1>

    <a href="{{ url('/admin/add-product') }}" class=" d-inline btn btn-primary mb-3 float-end me-6">Add Product</a>
    </div>
    <div class="container d-flex-inline  justify-content-center">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card" style="border: 4px solid aliceblue;">
                        
                          <img style="width: -webkit-fill-available; height:auto;" 
                          src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}" 
                          >
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p><strong>Category:</strong> {{ $product->category->name }}</p>
                            <p><strong>Brand:</strong> {{ $product->brand->name }}</p>
                            <p><strong>Unit:</strong> {{ $product->unit->name }}</p>
                            <p><strong>Price:</strong> ${{ $product->price }}</p>
                            <a href="/admin/product/edit/{{$product->id}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/admin/product/delete/{{$product->id}}" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
