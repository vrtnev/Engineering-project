@extends('layouts.master')
@section('title', 'Корзина')
@section('content')
    <h1>Корзина</h1>
    @foreach($order->products as $product)
    <div>
        <a href="{{ route('product', [$product->category->code, $product->code]) }}">
            <p><b>{{ $product->name }}</b></p>
        </a>
        <p>{{ $product->price }} руб.</p>
        <p>Количество: {{ $product->pivot->count }}</p>
        <form action="{{ route('cart-add', $product) }}" method="post">
            <button type="submit">+</button>
            @csrf
        </form>
        <form action="{{ route('cart-remove', $product) }}" method="post">
            <button type="submit">-</button>
            @csrf
        </form>
    </div>
    @endforeach
    <a href="{{ route('order') }}">Оформить заказ</a>
@endsection
