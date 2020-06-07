@extends('auth.layouts.master')
@section('title', 'Категория' . $category->name)
@section('content')
<h1>Категория</h1>
    <p>ID: {{ $category->id }}</p>
    <p>Код: {{ $category->code }}</p>
    <p>Название: {{ $category->name }}</p>
    <p>Описание: {{ $category->description }}</p>
    <p>Количество товаров: {{ $category->products->count() }}</p>
@endsection
