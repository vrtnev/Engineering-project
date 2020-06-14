@extends('auth.layouts.master')

@section('title', 'Категории')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Код</th>
            <th scope="col">Название</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->code }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <form method="post" action="{{ route('categories.destroy', $category) }}">
                        <a href="{{ route('categories.show', $category) }}" class="btn btn-primary">Просмотреть</a>
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Редактировать</a>
                        @method('DELETE')
                        @csrf
                        <input class="btn btn-danger" type="submit" value="Удалить">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
