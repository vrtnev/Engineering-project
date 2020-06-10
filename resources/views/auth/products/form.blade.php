@extends('auth.layouts.master')

@isset($product)
    @section('title', 'Редактировать товар' . $product->name)
@else
    @section('title', 'Добавить товар')
@endisset

@section('content')
    @isset($product)
        <h1>Редактирование товара {{ $product->name }}</h1>
    @else
        <h1>Добавление товара</h1>
    @endisset

    <form method="post"
          @isset($product)
          action="{{ route('products.update', $product) }}"
          @else
          action="{{ route('products.store') }}"
        @endisset
    >
        @isset($product)
            @method('PUT')
        @endisset
        @csrf
        <p>Код:<input
                type="text"
                name="code"
                value="@isset($product){{ $product->code }}@endisset"></p>
        <p>Название:<input
                type="text"
                name="name"
                value="@isset($product){{ $product->name }}@endisset"></p>
        <p>Описание:<input
                type="text"
                name="description"
                value="@isset($product){{ $product->description }}@endisset"></p>
        <button type="submit">Добавить</button>
    </form>
@endsection
