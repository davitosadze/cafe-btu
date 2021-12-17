@extends('layout')
@section('content')

<h2>მოიძებნა {{count($products)}} პროდუქტი</h2>

<br>
@foreach($products as $product)
<div class="card" style="margin-top:10px; float:left; margin-left:10px; width: 16.5rem;">
    <center>
    <img class="card-img-top" src="{{$product->image_link}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$product->product_name}}</h5>
      <h6 class="card-title">{{$product->price}}₾</h6>
      <a href="{{ route('full-product', $product->id) }}" class="btn btn-primary">სრულად</a>
    </div>
    </center>
  </div>
@endforeach
  

@endsection