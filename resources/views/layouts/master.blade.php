<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Shop - @yield('title')</title>
</head>
<body>
<header style="display: block; width: 100%; background-color: #636b6f;">
    <a href="{{route('index')}}">Главная</a>
    <a href="{{route('categories')}}">Категории</a>
    <a href="{{route('cart')}}">Корзина</a>
    <a href="{{route('order')}}">Оформить заказ</a>
    @guest
    <a href="{{route('login')}}">Войти</a>
    <a href="{{route('register')}}">Регистрация</a>
    @endguest
    @auth
        <a href="{{ route('home') }}">Панель администратора</a>
        <a href="{{route('get-logout')}}">Выйти</a>
    @endauth
</header>
<main>
    @if(session()->has('success'))
        <p><b>{{ session()->get('success') }}</b></p>
    @endif
    @if(session()->has('warning'))
        <p><b>{{ session()->get('warning') }}</b></p>
    @endif
    @yield('content')
</main>
</body>
</html>
