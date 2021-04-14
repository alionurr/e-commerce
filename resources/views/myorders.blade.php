@extends('master')
@section('content')

<div class="custom-product mt-5">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>My Orders</h3>
            @foreach ($orders as $item)
                <div class="row search-item cart-list-divider">
                    <div class="col-sm-3">
                        <a href="/detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div class="">
                            <h2>Name : {{$item->name}}</h2>
                            <h4>Delivery Status : {{$item->status}}</h4>
                            <h4>Address : {{$item->address}}</h4>
                            <h4>Payment Status : {{$item->payment_status}}</h4>
                            <h4>Payment Status : {{$item->payment_method}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
