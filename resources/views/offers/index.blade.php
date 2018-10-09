@extends('layout.header')

@section('content')
    <table class="table table-bordered">
        <tr>
            <td>имя товара</td>
            <td>количество товара</td>
            <td>сумма</td>
        </tr>
        @foreach( $offers as $offer)
            <tr>
                <td>{{ $offer->name }}</td>
                <td>{{ $offer->getCount() }}</td>
                <td>{{ $offer->getPrice() }}</td>
            </tr>
        @endforeach
    </table>
    <div class="my-3 w-50">
        <h5>Получить заказы на имя товара</h5>
        <select class="form-control" id="offer_name">
            <option id="disabled">Не выбрано</option>
            @foreach( $offers as $offer)
                <option value="{{ $offer->id }}">{{ $offer->name }}</option>
            @endforeach
        </select>
        <div class="my-3 border">
            <div class="row">
                <div class="col text-center">количество товара</div>
                <div class="col text-center">сумма</div>
            </div>
            <div id="info"></div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#offer_name').change(function () {
                $('#disabled').attr('disabled','disabled');
                var offer_id = $('#offer_name').val();
                $.ajax({
                    url:'{{ route('get-offer') }}',
                    type:'GET',
                    data: {
                        'offer_id':offer_id,
                        '_token':"{{ csrf_token() }}",
                    },
                    success:function (data) {
                        $('#info').empty();
                        $.each(data,function (index,value) {
                            $('#info').append(
                                '<div class="row">'+
                                '<div class="col text-center ">'+value['count']+'</div>'+
                                '<div class="col text-center">'+value['price']+'</div>'+
                                '</div>'
                            );
                        });
                    }
                });
            });
        });
    </script>
@endsection