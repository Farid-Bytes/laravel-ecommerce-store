<x-layout>
    <h1>Add Product</h1>

    <form action="/admin/add-product" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Category:</label>
            <select id="category_id" name="category_id" class="form-control" required>
                <option value="" disabled selected>Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="brand_id">Brand:</label>
            <select id="brand_id" name="brand_id" class="form-control" required>
                <option value="" disabled selected>Select a brand</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="unit_id">Unit:</label>
            <select id="unit_id" name="unit_id" class="form-control" required>
                <option value="" disabled selected>Select a unit</option>
                @foreach($units as $unit)
                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="picture">Picture:</label>
            <input type="file" id="picture" name="picture" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Product</button>
    </form>
</x-layout>
