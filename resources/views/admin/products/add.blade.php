@extends('admin.layout')
@section('content')
    <form method="POST" action="{{route('admin.product-store')}}">
        @csrf

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="show_main" value="1" id="showHome">
            <label class="form-check-label" for="showHome">
              მთავარზე ჩვენება
            </label>
        </div>
        <br>
        <input required placeholder="პროდუქტის სახელი" type="text" name="product_name" class="form-control">
        <br>
        <select name="category_id" class="form-control" id="">
            <option value="0" selected>აირჩიეთ კატეგორია</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}" >{{$category->category_name}}</option>
            @endforeach
        </select>
        <br>
        <input required placeholder="ფასი" type="number" step="any" name="price" class="form-control">
        <br>
        <input required placeholder="პრიორიტეტი მთავარ გვერდზე მაგ: 1, 2" type="number" step="any" name="priority" class="form-control">
        <br>
        <input required placeholder="სურათის ლინკი მაგ: https://mcdonalds.ge/a7f24fee96fe-resized.png" type="text" name="image_link" class="form-control">
        <br>
        <textarea name="description" id="" placeholder="აღწერა" class="form-control" cols="30" rows="3"></textarea>
        <br>
        <input type="submit" name="submit" class="btn btn-primary" value="დამატება" >
    </form>
@endsection