@extends('master')

@section('title', 'Категория ' . $category -> name)

@section('content')
    <h1>
        {{$category -> name}}
    </h1>
    <p>
        {{$category -> description}}
    </p>
    @include('card')
@endsection
