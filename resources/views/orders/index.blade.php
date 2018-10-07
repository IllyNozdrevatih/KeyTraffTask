@extends('layout.header')

@section('content')
    <table class="table table-bordered">
        <tr>
            <td>номер заказа</td>
            <td>имя товара</td>
            <td>цена</td>
            <td>клоличество</td>
            <td>имя оператора</td>
        </tr>
        @foreach( $orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->offer->name }}</td>
                <td>{{ $order->price }}</td>
                <td>{{ $order->count }}</td>
                <td>{{ $order->operator->name }}</td>
            </tr>
        @endforeach
    </table>
@endsection