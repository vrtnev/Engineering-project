@extends('auth.layouts.master')
@section('title', 'Заказы')
@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">Номер</th>
        <th scope="col">Имя</th>
        <th scope="col">Телефон</th>
        <th scope="col">Дата и время</th>
        <th scope="col">Сумма</th>
    </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <th scope="row">{{$order->id}}</th>
            <td>{{ $order->name }}</td>
            <td>{{ $order->phone }}</td>
            <td>{{ $order->created_at->format('H:i d.m.y') }}</td>
            <td>{{ $order->getFullPrice() }} руб.</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
