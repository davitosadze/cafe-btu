@extends('admin.layout')
@section('content')

<a class="btn btn-success" href="{{route('admin.product-add')}}">პროდუქტის დამატება</a>
<br>
<br>
@foreach($categories as $category)
<hr>
<br>
<br>
<h3>{{$category->category_name}}</h3>
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
    @foreach($category->products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <th scope="row">@if($product->show_main) <b class="btn btn-success"> კი </b> @else <b class="btn btn-danger"> არა </b> @endif</th>
        <td>
        <form action="{{route('admin.change-priority', $product->id)}}" method="POST">
          @csrf
          @method('put')
          <input style="width: 30%; float:left; margin-right:10px;" value="{{$product->priority}}" type="number" class="form-control" name="priority" id="">
          <input type="submit" name="submit" class="btn btn-success" value="OK" id="">
        </form>  
        </td>
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
@endforeach
@endsection