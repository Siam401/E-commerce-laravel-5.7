<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Sub_category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Carbon\Carbon;
use App\Product;
use App\Supplier;
use Illuminate\Support\Facades\DB;
use Image;

class ProductController extends Controller
{

    const UPLOAD_DIR = '/uploads/products/';

    public function index()
    {
        $paginatePerPage = 4;
        $pageNumber = request('page');
        if(!is_null($pageNumber)){
            $serial = $paginatePerPage * $pageNumber - $paginatePerPage;
        }else{
            $serial = 0;
        }

        $products = Product::latest()->paginate($paginatePerPage);

        return view('backend.products.index',compact('products','serial'));
    }

    public function create()
    {
        $brands = Brand::pluck('title', 'id');
        $categories = Category::pluck('title', 'id');
        $sub_categories =Sub_category::pluck('title', 'id');
        $suppliers = Supplier::get(['title', 'id']);
        $selectedSuppliers = [];
        return view('backend.products.create',compact('brands', 'suppliers', 'selectedSuppliers','categories','sub_categories'));
    }

    public function changeStatus($id)
    {
        $data=Product::findOrFail($id);
        $status=$data->status;
        if($status==0){
            DB::table('products')->where('id',$id)->update(['status' => 1]);
            return redirect()->back();
        }else{
            DB::table('products')->where('id',$id)->update(['status' => 0]);
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $data =  $request->all();
        if($request->hasFile('image1')){
            $data['picture1'] = $this->uploadImage($request->image1);
        }
        if($request->hasFile('image2')){
            $data['picture2'] = $this->uploadImage($request->image2);
        }

//        dd($data);
        $product=Product::create($data);
        $product->suppliers()->attach($request->supplier_ids);

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('backend.products.show' ,compact('product'));
    }

    public function edit(Product $product)
    {
        $brands = Brand::pluck('title', 'id');
        $categories = Category::pluck('title', 'id');
        $sub_categories =Sub_category::pluck('title', 'id');
        $suppliers = Supplier::get(['title', 'id']);
        $selectedSuppliers = [];

        return view('backend.products.edit',compact('product','brands', 'suppliers', 'selectedSuppliers','categories','sub_categories'));
    }

    public function update(Request $request, Product $product)
    {
        if($request->hasFile('image1')){
            $product['picture1'] = $this->uploadImage($request->image1);
        }
        if($request->hasFile('image2')){
            $product['picture2'] = $this->uploadImage($request->image2);
        }
        $product->update($request->all());
        return redirect()->route('products.index');
     }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
    public function trash()
    {
        $products = Product::onlyTrashed()->get();
        return view('backend.products.trash', compact('products'));
    }
    public function restore($id)
    {
        $product = Product::onlyTrashed()
            ->where('id', $id)
            ->first();

        $product->restore();
        return redirect()->back();
    }
    public function delete($id)
    {
    $product = Product::onlyTrashed()
                ->where('id', $id)
                ->first();
    $this->unlink($product->picture1);
    $this->unlink($product->picture2);
    $product->suppliers()->detach();
    $product->forceDelete();
    return redirect()->back();
    }
     private function uploadImage($file)
    {
        $random= rand(1,100);
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());//formatting the name for unique and readable
        $file_name =  $timestamp.'_'.$random.'.'.$file->getClientOriginalExtension();
        Image::make($file)->resize(300, 300)->save(public_path() . self::UPLOAD_DIR . $file_name);
        return $file_name;
    }

    private function unlink($file)
    {
        if ($file != '' && file_exists(public_path() . self::UPLOAD_DIR . $file)) {
            @unlink(public_path() . self::UPLOAD_DIR . $file);
        }
    }

    
    
    
    


}
