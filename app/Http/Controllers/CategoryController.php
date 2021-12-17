<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categoryProducts($cat_id) {
        $category = Category::find($cat_id);
        $products = Product::where("category_id", $cat_id)->orderBy('id', 'desc')->get();
        return view("category", compact('category', 'products'));
    }
}
