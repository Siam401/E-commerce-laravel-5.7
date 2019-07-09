<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addcart(Request $request){
        $quant=$request->quant;
        $product_id=$request->product_id;

        $product=Product::findOrFail($product_id);
        $data['quantity']=$quant;
        $data['name']=$product->title;
        $data['price']=$product->price;
        $data['id']=$product->id;
        $data['attributes']['image']=$product->picture1;

        Cart::add($data);
        return redirect()->route('resources.cart');

//        dd($data);
    }
    public function index(){

        $cartitems = Cart::getContent();
        $cartitems->count();
        return view('frontend.pages.shop_checkout',compact('cartitems'));
    }
    public function remove($id){
        Cart::remove($id);
        return redirect()->route('resources.cart');
    }
}
