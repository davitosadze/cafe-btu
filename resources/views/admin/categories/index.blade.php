@extends('admin.layout')
@section('content')

<a class="btn btn-success" href="{{route('admin.category-add')}}">კატეგორიის დამატება</a>
<br>
<br>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">კატეგორიის სახელი</th>
        <th scope="col">შეცვლა</th>
        <th scope="col">წაშლა</th>
      </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
      <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->category_name}}</td>
        <td><a class="btn btn-success" href="{{ url('/admin/categories/show', ['id' => $category->id]) }}">რედაქტირება</a></td>
        <td>
            
            <form action="{{ url('/admin/categories/delete', ['id' => $category->id]) }}" method="post">
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