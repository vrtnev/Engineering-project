@extends('auth.layouts.master')

@section('title', 'Категории')

@section('content')
<h1>Категории</h1>
<ul>
    @foreach($categories as $category)
        <li><a href="{{ route('categories.show', $category) }}">
                {{ $category->id }} {{ $category->code }} {{ $category->name }}</a>
            <a href="{{ route('categories.edit', $category) }}">Редактировать</a></li>
        <form method="post" action="{{ route('categories.destroy', $category) }}">
            @method('DELETE')
            @csrf
            <input class="btn btn-danger" type="submit" value="Удалить">
        </form>
    @endforeach
</ul>
<a href="{{ route('categories.create') }}">Создать</a>
@endsection
