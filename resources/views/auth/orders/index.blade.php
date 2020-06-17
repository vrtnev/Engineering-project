@extends('auth.layouts.master')
@section('title', 'Заказы')
@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">Номер</th>
        <th scope="col">Имя</th>
        <th scope="col">Телефон</th>
        <th scope="col">Дата и время</th>
        <th scope="col">Сумма</th>
        <th scope="col">Действия</th>
    </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <th scope="row">{{$order->id}}</th>
            <td>{{ $order->name }}</td>
            <td>{{ $order->phone }}</td>
            <td>{{ $order->created_at->format('H:i d.m.y') }}</td>
            <td>{{ $order->getFullPrice() }} руб.</td>
            <td>
                <form method="post">
{{--                    action="{{ route('orders.destroy', $order) }}"--}}
                    <a
                        href="
                            @if(Auth::user()->isAdmin())
                            {{ route('orders.show', $order) }}
                            @else
                            {{ route('person.orders.show', $order) }}
                            @endif
                            "
                        class="btn btn-primary">Просмотреть
                    </a>
{{--                    <a href="{{ route('orders.edit', $order) }}" class="btn btn-warning">Редактировать</a>--}}
                    @method('DELETE')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Удалить">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
