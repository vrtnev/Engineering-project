@extends('layouts.master')

    @section('title', 'Главная страница')

    @section('content')
        <h1>Shop by vrtnev</h1>
        @foreach($products as $product)
            @include('layouts.card', compact('product'))
        @endforeach
    @endsection
