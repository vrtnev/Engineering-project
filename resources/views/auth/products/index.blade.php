@extends('auth.layouts.master')

@section('title', 'Товары')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Код</th>
            <th scope="col">Название</th>
            <th scope="col">Картинка</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->code }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    <img style="max-width: 18rem;" src="{{ Storage::url($product->image) }}">
                </td>
                <td>
                    <form method="post" action="{{ route('products.destroy', $product) }}">
                        <a href="{{ route('products.show', $product) }}" class="btn btn-primary">Просмотреть</a>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Редактировать</a>
                        @method('DELETE')
                        @csrf
                        <input class="btn btn-danger" type="submit" value="Удалить">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('products.create') }}" class="btn btn-success">Добавить</a>
@endsection
