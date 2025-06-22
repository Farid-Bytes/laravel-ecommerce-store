<x-layout>
    <h1>Edit Product</h1>

    <form action="{{ url('/admin/product/update/' . $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" class="form-control" value="{{ $product->description }}" required>
        </div>
        <div class="form-group">
    <label for="category_id">Category:</label>
    <select id="category_id" name="category_id" class="form-control" required>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="brand_id">Brand:</label>
    <select id="brand_id" name="brand_id" class="form-control" required>
        @foreach($brands as $brand)
            <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected' : '' }}>{{ $brand->name }}</option>
        @endforeach
    </select>
</div>

        <div class="form-group">
            <label for="unit_id">Unit:</label>
            <select id="unit_id" name="unit_id" class="form-control" required>
                @foreach($units as $unit)
                    <option value="{{ $unit->id }}" {{ $unit->id == $product->unit_id ? 'selected' : '' }}>{{ $unit->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="picture">Picture:</label>
            <input type="file" id="picture" name="picture" class="form-control">
            @if($product->picture)
                <img src="{{ asset('storage/' . $product->picture) }}" alt="{{ $product->name }}" style="width:50px;height:auto;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</x-layout>
