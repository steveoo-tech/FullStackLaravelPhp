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

Route::get('/home/create', 'HomeController@create');
Route::post('/home/store', 'HomeController@store');

Route::get('/product/create', 'ProductController@create');
Route::post('/product/store', 'ProductController@store');

Route::post('/home/delete', 'HomeController@delete');

Route::post('/product/delete', 'ProductController@delete');


// Route::get('/', function () {


//  return view('welcome', [
//  'products' => $products, 
//  'firstname'=>'Steven', 
//  'lastname'=>'Sidhu'
 
//  ]);

// });