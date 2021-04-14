@extends('master')
@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-6 mt-5">
                <img class="detail-img" src="{{$product['gallery']}}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h2>{{$product->name}}</h2>
                <h3>Price : {{$product->price}}</h3>
                <h4>Details : {{$product->description}}</h4>
                <h5>Category : {{$product->category}}</h5>
                <br><br>
                <div class="row mb-5">
                    <div class="col-sm-3">
                        <form action="/add_to_cart" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <button class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-success">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
