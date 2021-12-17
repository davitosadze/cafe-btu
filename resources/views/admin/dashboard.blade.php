@extends('admin.layout')
@section('content')
    <a class="btn btn-primary" style="width:49%; padding:30px;" href="{{route('admin.categories')}}" /> კატეგორიები </a>
    <a class="btn btn-primary" style="width:49%; padding:30px;" href="{{route('admin.products')}}" /> პროდუქტები </a>

@endsection