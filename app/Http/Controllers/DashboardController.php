<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index() {
        $categories = Category::with(['products' => function($query) {
            $query->orderBy('priority', 'asc');
        }])->get();


        return view("main", compact('categories'));
    }
    
}
