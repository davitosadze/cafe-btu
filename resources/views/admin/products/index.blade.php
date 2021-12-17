@extends('admin.layout')
@section('content')

<a class="btn btn-success" href="{{route('admin.product-add')}}">პროდუქტის დამატება</a>
<br>
<br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">გამოტანილია მთავარზე?</th>
        <th scope="col">პრიორიტეტი კატეგორიაში</th>
        <th scope="col">დასახელება</th>
        <th scope="col">ფასი</th>
        <th scope="col">კატეგორია</th>
        <th scope="col">შეცვლა</th>
        <th scope="col">წაშლა</th>
      </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <th scope="row">@if($product->show_main) <b class="btn btn-success"> კი </b> @else <b class="btn btn-danger"> არა </b> @endif</th>
        <td>{{$product->priority}}</td>
        <td>{{$product->product_name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->category->category_name}}</td>
        <td><a class="btn btn-success" href="{{ url('/admin/products/show', ['id' => $product->id]) }}">რედაქტირება</a></td>
        <td>
            
            <form action="{{ url('/admin/products/delete', ['id' => $product->id]) }}" method="post">
                <input class="btn btn-danger" type="submit" value="წაშლა" />
                @method('delete')
                @csrf
            </form>

        </td>
      </tr>
      @endforeach

      
    </tbody>
  </table>

@endsection