<?php
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', 'HomeController@index');

Route::get('/product/index', 'ProductController@index');

Route::get('/home/detail/{id}', 'HomeController@detail');

Route::get('/product/detail/{id}', 'ProductController@detail');


// Route::get('/', function () {


//  return view('welcome', [
//  'products' => $products, 
//  'firstname'=>'Steven', 
//  'lastname'=>'Sidhu'
 
//  ]);

// });