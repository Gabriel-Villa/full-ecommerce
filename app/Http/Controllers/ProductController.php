<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\CartItem;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::Active()->get();
        $products = Product::select('*')->WithStock()->with('category');

        if($request->has('name') && $request->filled('name')){
            $products->where('product.name', 'like', '%'.$request->name.'%');
        }

        if($request->has('category') && $request->filled('category')){
            $products->ByCategory($request->category);
        }

        if($request->has('price') && $request->filled('price')){
            $products->orderBy('product.price', $request->price);
        }
        
        $products = $products->paginate(8);
        $products->appends($request->all());

        return view('product.index', compact('products', 'categories'));
    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::BySlug($slug)->firstOrFail();
        $relate_products = Product::ByCategory($product->categoryId)->inRandomOrder()->take(4)->get();
        return view('product.show', compact('product', 'relate_products'));
    }

    
}
