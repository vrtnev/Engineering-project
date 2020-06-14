<div class="card" style="width: 18rem; min-width: 18rem; margin: auto; min-height: 28rem; height: 28rem;">
    <img src="{{ Storage::url($product->image) }}" class="card-img-top" style="max-width: 100%" alt="...">
    <div class="card-body" style="display: flex; flex-direction: column; justify-content: flex-end;">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">{{ $product->price }} руб.</p>

        <form action="{{ route('cart-add', $product)  }}" method="post">
            <button class="btn btn-primary" type="submit">В корзину</button>
            <a class="btn btn-outline-secondary" href="{{route('product', [$product->category->code, $product->code])}}">Подробнее</a>
            @csrf
        </form>
    </div>
</div>
