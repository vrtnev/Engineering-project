@extends('layouts.master')

@section('title', 'Главная страница')

@section('content')
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 flex-wrap">
    @foreach($products as $product)
            @include('layouts.card', compact('product'))
    @endforeach
    </div>
@endsection
