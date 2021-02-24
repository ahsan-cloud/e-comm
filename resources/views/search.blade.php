@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filters</a>
    </div>
    <div class="col-sm-4">
    <div class="trending-wrapper">
    <h4>Result For Products</h4>
    @foreach($product as $item)
    <div class="searched-item">
    <a href="detail/{{$item['id']}}">
      <img class="trending-img" src="{{$item['gallery']}}" alt="">
      <div class="">
        <h3>{{$item['name']}}</h3> 
        <h5>{{$item['desc']}}</h5>
      </div>
    </a>
    </div>
    @endforeach
  </div>
    </div>
</div>
@endsection