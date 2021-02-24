@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
    <div class="trending-wrapper">
    <h4>Cart List</h4>
    @foreach($product as $item)
    <div class="row searched-item cart-list-divider">
    <div class="col-sm-4">
    <a href="detail/{{$item->id}}">
      <img class="trending-img" src="{{$item->gallery}}" alt="">
    </a>
    </div>
    <div class="col-sm-3">
      <div class="">
        <h3>{{$item->name}}</h3> 
        <h5>{{$item->desc}}</h5>
      </div>
    </div>
    <div class="col-sm-3">
        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" style="margin-top:30px;">Remove From Cart</a>
    </div>
    </div>
    @endforeach
  </div>
    </div>
</div>
@endsection