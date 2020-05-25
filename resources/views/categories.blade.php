@extends('master')

@section('title', 'Все категории')

@section('content')
    <h1>Все категории</h1>
    <ul>
        @foreach($categories as $category)
            <li><a href="{{route('category', $category->code)}}"><b>{{$category->name}}</b><br>
                    <p>{{$category->description}}</p></a></li>
        @endforeach
    </ul>
@endsection
