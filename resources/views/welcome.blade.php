<x-index_layout>
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>New product</h4>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".women">Women’s</li>
                    <li data-filter=".men">Men’s</li>
                    <li data-filter=".kid">Kid’s</li>
                    <li data-filter=".accessories">Accessories</li>
                    <li data-filter=".cosmetic">Cosmetics</li>
                </ul>
            </div>
        </div>
        <div class="row property__gallery">
            @foreach ($index_products as $product)
                
            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <a href="{{ url('/product/' . $product->id) }}">
                    <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/' . $product->picture) }}">
                           
                    </div>
                    <div class="product__item__text">
                        <h6>{{ $product->name }}</h6>
                        <div class="product__price">{{ $product->price }}</div>
                        
                        <a href="{{ url('/product/' . $product->id) }}">
                        <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="btn btn-secondary">Add To Cart</button>
                     </form>
                    </a>
                    
                    </div>
                </div>
                </a>
            </div>

            @endforeach
            
                </div>
            </div>
        </div>
    </div>
</section>

</x-index_layout>