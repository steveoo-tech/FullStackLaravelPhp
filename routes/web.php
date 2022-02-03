<?php
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', 'HomeController@index');

Route::get('/product/index', 'ProductController@index');


// Route::get('/', function () {
// $products = Product::orderBy('created_at', 'asc')->get();


//  return view('welcome', [
//  'products' => $products, 
//  'firstname'=>'Steven', 
//  'lastname'=>'Sidhu'
 
//  ]);

// });