<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.layout');
    }

    public function productList()
    {
        $products = Product::with('images')->orderBy('id','desc')->get();
        return view('client.product.list-product', compact('products'));
    }

    public function show($id)
    {
        $product = Product::with('images')->find($id);
        return view('client.product.detail-product',compact('product'));
    }
}
