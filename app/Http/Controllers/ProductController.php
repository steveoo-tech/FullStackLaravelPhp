<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    // Shows detail for single item.
public function detail($id) {
        $product = Product::where('id', $id)->first();
        return view('product/detail', [
            'product' => $product
        ]);
    }

    public function index() {
        $products = Product::orderBy('created_at', 'asc')->get();
       
        // Send content to welcome view.
        return view('/product/index', [
        'products' => $products, 'listname'=>'My Products List'
        ]);
        }
}
