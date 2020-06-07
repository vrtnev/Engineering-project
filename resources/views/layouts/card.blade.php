<div class="card" style="width: 18rem; min-width: 18rem;">
    <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-se-family-select-2020?wid=882&amp;hei=1058&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1586794486444" class="card-img-top" alt="...">
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
