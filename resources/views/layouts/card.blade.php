<div class="card" style="width: 18rem; min-width: 18rem;">
    <img src="{{ Storage::url($product->image) }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">{{ $product->price }} руб.</p>

        <form action="{{ route('cart-add', $product)  }}" method="post">
            <button class="btn btn-primary" type="submit">В корзину</button>
            <a class="btn btn-outline-secondary" href="{{route('product', [$product->category->code, $product->code])}}">Подробнее</a>
            @csrf
        </form>
    </div>
</div>
