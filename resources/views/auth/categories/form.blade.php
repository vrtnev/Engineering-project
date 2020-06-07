@extends('auth.layouts.master')
@section('title', 'Добавить категорию')
@section('content')
    <h1>Добавление категории</h1>
    <form method="post" action="{{ route('categories.store') }}">
        @csrf
        <button type="submit">Добавить</button>
    </form>
@endsection
