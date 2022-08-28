<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        if(Cart::count() <= 0){
            return redirect()->back()->with('message', 'Tienes que tener almenos un producto en tu carrito');
        }
        return view('checkout.index');
    }
}
