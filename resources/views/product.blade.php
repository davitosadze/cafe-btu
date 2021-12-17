@extends('layout')
@section('content')

<center>
<h3>{{$product->product_name}}</h3>
<h5 style="color:red;">{{$product->price}}₾</h5>
<br>
<img style="width: 50%;" src="{{$product->image_link}}" alt="">
<br>
<br>

<p>აღწერა: {{$product->description}}</p>
</center>

@endsection