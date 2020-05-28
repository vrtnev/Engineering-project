@extends('layouts.master')
@section('title', 'Оформление заказа')
@section('content')
    <h1>Оформление заказа</h1>
    <p>Общая стоимость заказа: <b>{{ $order->getFullPrice() }}</b></p>
    <form method="post" action="{{ route('cart-confirm') }}">
        <p>Имя</p>
        <input type="text" name="name">
        <p>Телефон</p>
        <input type="text" name="phone">
        <button type="submit">Заказать</button>
        @csrf
    </form>
@endsection
