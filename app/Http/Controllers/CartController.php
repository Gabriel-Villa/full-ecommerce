<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Cart::content());
        return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        try {
            $product = Product::findOrFail($request->product_id);
                       
            $duplicados = Cart::search(function ($cartItem, $rowId) use ($product) {
                return $cartItem->id === $product->product_id;
            });
    
            if($duplicados->isNotEmpty()) {
                return back()->with('message', 'El producto ya se encuentra en el carrito');
            }
            
            Cart::add($product->product_id, $product->name, 1, $product->price)->associate('App\Product');
            
            return back()->with('message', 'Producto agregado al carrito');

        } catch (\Exception $e) {
            return back()->with('message', 'Ocurrio un error al agregar el producto');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Cart::update($id, $request->qty);
        return response()->json(['message' => 'Cantidad actualizada'], 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);            
        return back()->with('message', 'Producto eliminado del carrito');
    }

    public function clear()
    {
      
    }

}
