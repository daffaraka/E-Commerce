<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $cart = Cart::with('products.images')->get();
        // dd($cart);
        return view('admin.cart.cart-index',compact('cart'));
    }

   
    public function create()
    {
        //
    }

   
    public function add_to_cart($id)
    {
        $product = Product::find($id);

      
        $cartAttribute = [];
        $cartAttribute['user_id'] = Auth::user()->id;
        $cartAttribute['product_id'] = $product->id;
        $cartAttribute['qty'] = 1;
        $cartAttribute['status'] = 'PENDING';


        Cart::create($cartAttribute);

        return redirect()->route('cart.index');
        
    }

    public function show(Cart $cart)
    {
        //
    }

  
    public function edit(Cart $cart)
    {
        //
    }

    public function update(Request $request, Cart $cart)
    {
        //
    }

    public function destroy(Cart $cart)
    {
        //
    }
}
