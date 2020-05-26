<div style="border: 2px solid black; width: 200px;">
    <img style="width: 100%"
         src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-se-family-select-2020?wid=882&amp;hei=1058&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1586794486444">
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->price }} руб.</p>
    <a href="{{route('cart')}}">Добавить в корзину</a>
    <a href="{{route('product', [$product->category->code, $product->code])}}">Подробнее</a>
</div>
