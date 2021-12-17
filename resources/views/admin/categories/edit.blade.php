@extends('admin.layout')
@section('content')
    <form method="POST" action="{{ route('admin.category-update', $category->id) }}">
        @csrf
        <input required placeholder="კატეგორიის სახელი" value="{{$category->category_name}}" type="text" name="category_name" class="form-control">
        <br>
        <input type="submit" name="submit" class="btn btn-primary" value="განახლება" >
    </form>
@endsection