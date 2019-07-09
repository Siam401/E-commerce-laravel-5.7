<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        $orders=Order::all();

        return view('backend.home',compact('products','orders'));
    }

    public function showProfile(User $user)
    {
        $profile=$user->profile()->get();

        return view('backend.profile.profile',compact('products','orders'));
    }


}
