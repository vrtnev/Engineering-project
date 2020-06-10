@extends('auth.layouts.master')

@isset($category)
    @section('title', 'Редактировать категорию' . $category->name)
@else
    @section('title', 'Добавить категорию')
@endisset

@section('content')
    @isset($category)
        <h1>Редактирование категории {{ $category->name }}</h1>
    @else
        <h1>Добавление категории</h1>
    @endisset

    <form method="post" enctype="multipart/form-data"
          @isset($category)
          action="{{ route('categories.update', $category) }}"
          @else
          action="{{ route('categories.store') }}"
        @endisset
    >
        @isset($category)
            @method('PUT')
        @endisset
        @csrf
        <p>Код:<input
                type="text"
                name="code"
                value="@isset($category){{ $category->code }}@endisset"></p>
        <p>Название:<input
                type="text"
                name="name"
                value="@isset($category){{ $category->name }}@endisset"></p>
        <p>Описание:<input
                type="text"
                name="description"
                value="@isset($category){{ $category->description }}@endisset"></p>
        <p>Картинка:
            <input type="file" name="image" id="image">
        </p>
        <button type="submit">Добавить</button>
    </form>
@endsection
