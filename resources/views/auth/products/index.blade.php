@extends('auth.layouts.master')

@section('title', 'Товары')

@section('content')
<h1>Товары</h1>
<ul>
    @foreach($products as $product)
        <li><a href="{{ route('products.show', $product) }}">
                {{ $product->id }} {{ $product->code }} {{ $product->name }}</a>
            <a href="{{ route('products.edit', $product) }}">Редактировать</a></li>
    <p>Картинка: <img src="{{ Storage::url($product->image) }}"></p>
        <form method="post" action="{{ route('products.destroy', $product) }}">
            @method('DELETE')
            @csrf
            <input class="btn btn-danger" type="submit" value="Удалить">
        </form>
    @endforeach
</ul>
<a href="{{ route('products.create') }}">Создать</a>
@endsection
