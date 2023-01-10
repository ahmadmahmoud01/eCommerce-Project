<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function show($id) {
        $product = Product::find($id);

        return view('products.show', compact('product'));
    }

    public function search(Request $request) {

        // dd($request->search);
        $products = Product::where('name', 'like', '%'. $request->search. '%')->get();

        return view('products.search', compact('products'));
    }
}
