@extends('layouts.master')

@section('title', 'Главная страница')

@section('content')
    @foreach($products as $product)
        @if($loop->index % 2 == 0)
            <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
            @include('layouts.card', compact('product'))
            @if($loop->remaining == 0)
                </div>
            @endif
        @endif
        @if($loop->index % 2 != 0)
            @include('layouts.card', compact('product'))
            </div>
        @endif
    @endforeach
@endsection
