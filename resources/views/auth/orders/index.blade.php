@extends('auth.layouts.master')
@section('title', 'Заказы')
@section('content')
    @foreach($orders as $order)
        <h3>Заказ {{$order->id}}</h3>
        <p>Имя: <b>{{ $order->name }}</b></p>
        <p>Телефон: <b>{{ $order->phone }}</b></p>
        <p>{{ $order->created_at->format('H:i d.m.y') }}</p>
        <p>{{ $order->getFullPrice() }} руб.</p>
    @endforeach
@endsection
