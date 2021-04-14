@extends('master')
@section('content')

<div class="custom-product mt-5">
    <div class="row">
        <div class="col-sm-4 pl-5">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h3>Result for Product(s)</h3>
                @foreach ($products as $item)
                    <div class="search-item">
                        <a href="/detail/{{$item['id']}}">
                            <img class="trending-image" src="{{$item['gallery']}}">
                            <div class="">
                                <h2>{{$item['name']}}</h2>
                                <h4>{{$item['description']}}</h4>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
