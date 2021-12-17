@extends('layout')

@section('content')

@foreach($categories as $category)

<div style="width:100%; margin-top:20px; float:left;" class="category">
    <center><a href="{{ route('category-products', $category->id)}}"><h3>{{$category->category_name}}</h3></a></center>

    @foreach($category->products as $product)
        @if($product->show_main)
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
        @endif
    @endforeach
<br>
<a class="btn btn-primary" style=" float: left; display:block; width:100%;" href="{{route('category-products', $category->id)}}">ყველა პროდუქტი</a>
<br>
<br>
<br>
<hr>
<br>
</div>

@endforeach
  
@endsection