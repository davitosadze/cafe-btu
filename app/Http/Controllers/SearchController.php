<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function search(Request $req) {
        $keyword = $req->keyword;
        $products = Product::where('product_name', 'LIKE', "%{$keyword}%")->get();

        return view("search", compact('products'));
        
    }
}
