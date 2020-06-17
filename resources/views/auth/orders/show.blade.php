@extends('auth.layouts.master')
@section('title', 'Заказы')
@section('content')
<h1>Заказ №{{ $order->id }}</h1>
<p>Заказчик <b>{{ $order->name }}</b></p>
<p>Телефон <b>{{ $order->phone }}</b></p>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Название</th>
        <th scope="col">Количество</th>
        <th scope="col">Цена</th>
        <th scope="col">Стоимость</th>
    </tr>
    </thead>
    <tbody>
    @foreach($order->products as $product)
        <tr>
            <th scope="row">
                <a href="{{ route('product', $product) }}">
                    <img src="{{ Storage::url($product->image) }}">
                    {{ $product->name }}
                </a>
            </th>
            <td>{{ $product->price }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->getPriceForCount() }}</td>
            <td>{{ $order->created_at->format('H:i d.m.y') }}</td>
            <td>{{ $order->getFullPrice() }} руб.</td>
        </tr>
    @endforeach
    <tr>

    </tr>
    </tbody>
</table>
@endsection
