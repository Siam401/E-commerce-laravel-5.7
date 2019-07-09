<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Customer;
use App\Product;
use App\Sub_category;
use App\Supplier;
use Cart;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index(){
        $brands=Brand::all();
        $products=Product::all();
        return view('frontend.pages.home',compact('brands','products'));
    }

    public function sidebar2()
    {

        $products=Product::latest()->where('status',0)->paginate(9);
        $categories=Category::all();
        $sub_categories=Sub_category::all();
        $suppliers=Supplier::all();
        $brands=Brand::all();
        $cartitems = Cart::getContent();

        return view('frontend.pages.shop_left_sidebar2',compact('products','categories','suppliers','brands','sub_categories','cartitems'));
    }

    public function search(){
        $categories=Category::all();
        $sub_categories=Sub_category::all();
        $suppliers=Supplier::all();
        $brands=Brand::all();
        $cartitems = Cart::getContent();

        $keyword = request('search');
        if(!is_null($keyword)){
            $products = Product::latest()->where('title', 'Like', "%{$keyword}%")->paginate(9);
        }else{
            $products = Product::latest()->paginate(9);
        }
        return view('frontend.pages.shop_left_sidebar2',compact('products','categories','suppliers','brands','sub_categories','cartitems'));

    }


    public function sorting()
    {
        $categories=Category::all();
        $sub_categories=Sub_category::all();
        $suppliers=Supplier::all();
        $brands=Brand::all();
        $cartitems = Cart::getContent();

        $data=request('sorting');
        if($data=='popular'){
            $products = Product::orderBy('popularity_count','desc')->paginate(9);
        }elseif ($data=='high_price'){
            $products = Product::orderBy('price','desc')->paginate(9);
        }elseif ($data=='low_price'){
            $products = Product::orderBy('price','asc')->paginate(9);
        }


        return view('frontend.pages.shop_left_sidebar2',compact('products','categories','suppliers','brands','sub_categories','cartitems'));

    }

    public function sp(Product $product)
    {
        $related_id=$product->sub_category_id;
        $relateds=DB::table('products')->where('sub_category_id',$related_id)->get();
        $product->popularity_count++;
        $product->save();
        return view('frontend.pages.shop_product',compact('product','relateds'));
    }
//    public function sc(){
//    return view('frontend.pages.shop_checkout');
//    }
    public function bl()
    {
        $cartitems = Cart::getContent();
        $customer_id=session('customer_id');
        $customer=Customer::findOrFail($customer_id);
        return view('frontend.pages.shop_billing',compact('cartitems','customer'));
    }
    public function login()
    {
        return view('frontend.pages.login');
    }
    public function login_customer(Request $request)
    {
        $data=$request->except('_token');
        $email=$data['email'];
        $password=md5($data['password']);
        $result=DB::table('customers')->where('email',$email)->where('password',$password)->first();
        $customer_name=$result->user_name;
        $customer_id=$result->id;
        if($result!=null){
            session()->put('customer_id',$customer_id);
            session()->put('customer_name',$customer_name);
        }

        return redirect(route('resources.home'));;
    }
    public function logout_customer()
    {
        session()->flush();
        return redirect(route('resources.home'));
    }
    public function register()
    {
        return view('frontend.pages.register');
    }
    public function register_customer(Request $request)
    {
        $data=$request->except('_token');
        $data['password'] = md5(request()->password);
        $customer_name=$request->user_name;
        $customer_id=DB::table('customers')->insertGetId($data);
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$customer_name);

        return redirect(route('resources.home'));
    }
    public function category_products($id)
    {

        $products=DB::table('products')->where('category_id',$id)->get();
        $categories=Category::all();
        $sub_categories=Sub_category::all();
        $suppliers=Supplier::all();
        $brands=Brand::all();
        $cartitems = Cart::getContent();

        return view('frontend.pages.shop_left_sidebar2',compact('products','categories','suppliers','brands','sub_categories','cartitems'));
    }
    public function sub_category_products($id)
    {

        $products=DB::table('products')->where('sub_category_id',$id)->get();
        $categories=Category::all();
        $sub_categories=Sub_category::all();
        $suppliers=Supplier::all();
        $brands=Brand::all();
        $cartitems = Cart::getContent();

        return view('frontend.pages.shop_left_sidebar2',compact('products','categories','suppliers','brands','sub_categories','cartitems'));
    }

    public function brand_products($id)
    {

        $products=DB::table('products')->where('brand_id',$id)->get();
        $categories=Category::all();
        $sub_categories=Sub_category::all();
        $suppliers=Supplier::all();
        $brands=Brand::all();
        $cartitems = Cart::getContent();

        return view('frontend.pages.shop_left_sidebar2',compact('products','categories','suppliers','brands','sub_categories','cartitems'));
    }

    public function supplier_products($id)
    {

        $products = Supplier::find($id)->products()->get();
        $categories=Category::all();
        $sub_categories=Sub_category::all();
        $suppliers=Supplier::all();
        $brands=Brand::all();
        $cartitems = Cart::getContent();

        return view('frontend.pages.shop_left_sidebar2',compact('products','categories','suppliers','brands','sub_categories','cartitems'));
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function bhome()
    {
        return view('backend.products.index');
    }
}
