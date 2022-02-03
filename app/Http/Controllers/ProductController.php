<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::orderBy('created_at', 'asc')->get();
       
        // Send content to welcome view.
        return view('/product/index', [
        'products' => $products, 'listname'=>'My Products List'
        ]);
        }
}
