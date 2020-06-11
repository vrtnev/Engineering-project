@extends('layouts.master')

@section('title', 'Все категории')

@section('content')
        @foreach($categories as $category)

            @if($loop->index % 2 == 0)
                <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">

                    <a href="{{route('category', $category->code)}}" class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                        <div class="my-3 py-3">
                            <h2 class="display-5">{{$category->name}}</h2>
                            <p class="lead">{{$category->description}}</p>
                        </div>
                        <div class="bg-light shadow-sm mx-auto" style="background-image: url('{{ Storage::url($category->image) }}'); background-repeat: no-repeat; background-position: center; background-size: auto 100%; width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
                    </a>

                    @if($loop->remaining == 0)
                    </div>
                    @endif
            @endif
            @if($loop->index % 2 != 0)
                <a href="{{route('category', $category->code)}}" class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                    <div class="my-3 py-3">
                        <h2 class="display-5">{{$category->name}}</h2>
                        <p class="lead">{{$category->description}}</p>
                    </div>
                    <div class="bg-light shadow-sm mx-auto" style="background-image: url('{{ Storage::url($category->image) }}'); background-repeat: no-repeat; background-position: center; background-size: auto 100%; width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
                </a>
                </div>
            @endif
        @endforeach
@endsection
