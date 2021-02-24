@extends('master')
@section('content')
<div class="custom-product container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Back To Return</a>
            <h2>Name : {{$product['name']}}</h2>
            <h2>Price : {{$product['price']}}</h2>
            <h3>Category : {{$product['category']}}</h3>
            <h3>Description : {{$product['desc']}}</h3>
            
            <br><br>
            <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-success">Add To Cart</button>
            </form>
            <br><br>
            <button class="btn btn-primary">Buy Now</button>
        </div>
    </div>
</div>

@endsection