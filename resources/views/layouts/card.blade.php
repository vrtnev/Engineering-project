<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
        <h2 class="display-5">{{ $product->name }}</h2>
        <p class="lead">{{ $product->price }} руб.</p>
        <form action="{{ route('cart-add', $product)  }}" method="post">
            <button class="btn btn-outline-secondary" type="submit">Добавить в корзину</button>
            <a class="btn btn-outline-secondary" href="{{route('product', [$product->category->code, $product->code])}}">Подробнее</a>
            @csrf
        </form>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="background-image: url('https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-se-family-select-2020?wid=882&amp;hei=1058&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1586794486444'); background-repeat: no-repeat; background-position: center; background-size: auto 100%; width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
</div>
