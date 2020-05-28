<html>
<head>
    <meta charset="utf-8">
    <title>Shop - @yield('title')</title>
</head>
<body>
    <header style="display: block; width: 100%; background-color: mediumslateblue;">
        <a href="{{route('index')}}">Главная</a>
        <a href="{{route('categories')}}">Категории</a>
        <a href="{{route('cart')}}">Корзина</a>
        <a href="{{route('order')}}">Оформить заказ</a>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
