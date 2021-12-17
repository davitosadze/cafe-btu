@extends('admin.layout')
@section('content')
    <form method="POST" action="{{route('admin.product-update', $product->id)}}">
        @csrf
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="show_main" @if($product->show_main) checked @endif value="1" id="showHome">
            <label class="form-check-label" for="showHome">
              მთავარზე ჩვენება
            </label>
        </div>
        <br>

        <input required placeholder="პროდუქტის სახელი" value="{{$product->product_name}}" type="text" name="product_name" class="form-control">
        <br>
        <select name="category_id" class="form-control" id="">
            <option value="0" selected>აირჩიეთ კატეგორია</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}" >{{$category->category_name}}</option>
            @endforeach
        </select>
        <br>
        <input required placeholder="ფასი" type="number" step="any"  value="{{$product->price}}" name="price" class="form-control">
        <br>
        <input required placeholder="პრიორიტეტი მთავარ გვერდზე მაგ: 1, 2" type="number" value="{{$product->priority}}" step="any" name="priority" class="form-control">
        <br>
        <input required placeholder="სურათის ლინკი მაგ: https://mcdonalds.ge/a7f24fee96fe-resized.png" value="{{$product->image_link}}" type="text" name="image_link" class="form-control">
        <br>
        <textarea name="description" id="" placeholder="აღწერა" class="form-control" cols="30" rows="3">{{$product->description}}</textarea>
        <br>
        <input type="submit" name="submit" class="btn btn-primary" value="განახლება" >
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $("select").val("{{$product->category_id}}");
    </script>        
@endsection