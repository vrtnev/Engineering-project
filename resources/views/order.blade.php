@extends('master')
@section('title', 'Оформление заказа')
@section('content')
    <h1>Оформление заказа</h1>
    <p>Общая стоимость заказа: <b>{{ $order->getFullPrice() }}</b></p>
    <form method="post" action="{{ route('cart-confirm') }}">
        <button type="submit">Заказать</button>
        @csrf
    </form>
@endsection
