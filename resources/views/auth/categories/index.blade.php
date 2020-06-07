@extends('auth.layouts.master')

@section('title', 'Категории')

@section('content')
<h1>Категории</h1>
<ul>
    @foreach($categories as $category)
        <li><a href="{{ route('categories.show', $category) }}">{{ $category->id }} {{ $category->code }} {{ $category->name }}</a></li>
    @endforeach
</ul>
<a href="{{ route('categories.create') }}">Создать</a>
@endsection
