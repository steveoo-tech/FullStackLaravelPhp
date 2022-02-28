<?php

namespace App\Http\Controllers;
use App\Models\Product;
// ** Need these things to create item.
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Input, Redirect; 



class ProductController extends Controller
{

        // Displays form to create object.
    public function create() {
        return view('/product/create', []);
    }
    // Creates new item. 
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'description' => 'required|max:255',
        ]);
        
    // Go to list page and show error.
    if ($validator->fails()) {
        return redirect('/product')
            ->withInput()
            ->withErrors($validator);
    }
    // Create new Product object and save it to the database.
    $product = new Product;
    $product->description = $request->description;
    $product->quantity = $request->quantity;
    $product->price = $request->price;
    $product->save();
    // Gets last item that was inserted into the database.
    $id = DB::getPdo()->lastInsertId();
    $path = '/product/detail/'.$id;
    return redirect($path); // Show detail of new item.
    }

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

    // Enables deletion. 
    public function delete(Request $request) {
    // Extract id from the web request
         $id = $request->id;
    // Find the Todo object by id and delete it.
        Product::findOrFail($id)->delete();
    // Redirect to the list view.
        return redirect('/product/index');
        } 
}
