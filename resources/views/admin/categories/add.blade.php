@extends('admin.layout')
@section('content')
    <form method="POST" action="{{route('admin.category-store')}}">
        @csrf
        <input required placeholder="კატეგორიის სახელი" type="text" name="category_name" class="form-control">
        <br>
        <input type="submit" name="submit" class="btn btn-primary" value="დამატება" >
    </form>
@endsection