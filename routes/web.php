<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get("/", "DashboardController@index");
Route::get("/category/{id}", "CategoryController@categoryProducts")->name('category-products');
Route::get("/product/{id}", "ProductController@details")->name('full-product');
Route::get('/search', 'SearchController@search')->name('search');


Route::prefix('admin')->group(function () {
    Route::get("/", "Admin\DashboardController@index");
    
    #CATEGORIES
    Route::get("/categories", "Admin\CategoryController@index")->name('admin.categories');
    Route::get("/categories/show/{id}", "Admin\CategoryController@show")->name('admin.category-show');
    Route::get("/categories/add", "Admin\CategoryController@create")->name('admin.category-add');
    Route::post("/categories/store", "Admin\CategoryController@store")->name('admin.category-store');
    Route::post("/categories/update/{id}", "Admin\CategoryController@update")->name('admin.category-update');
    Route::delete("/categories/delete/{id}", "Admin\CategoryController@destroy")->name('admin.category-delete');


    #PRODUCTS
    Route::get("/products", "Admin\ProductController@index")->name('admin.products');

    Route::get("/products/show/{id}", "Admin\ProductController@show")->name('admin.product-show');
    Route::get("/products/add", "Admin\ProductController@create")->name('admin.product-add');
    Route::post("/products/store", "Admin\ProductController@store")->name('admin.product-store');
    Route::post("/products/update/{id}", "Admin\ProductController@update")->name('admin.product-update');
    Route::delete("/products/delete/{id}", "Admin\ProductController@destroy")->name('admin.product-delete');
    Route::put("/products/change-priority/{id}", "Admin\ProductController@changePriority")->name('admin.change-priority');

});