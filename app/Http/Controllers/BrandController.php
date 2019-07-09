<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Support\Facades\Session;
use Image;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    const UPLOAD_DIR = '/uploads/brands/';
    function index(){
        $paginatePerPage=5;
        $pageNumber=request('page') ;

        if (!is_null($pageNumber)){
            $serial=$paginatePerPage*$pageNumber-$paginatePerPage;
        }else{
            $serial=0;
        }
        $brands = Brand::paginate($paginatePerPage);
        return view('backend.brands.index',compact('brands','serial'));
    }
    function create(){
        return view('backend.brands.create');
    }
    function store(Request $request){
        $data=$request->all();

        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($request->image);
        }
        Brand::create($data);
        Session::flash('message','Brand created successfully');
        return redirect('/brands');
    }
    function show(Brand $brand){

        return view('backend.brands.show',compact('brand'));
    }
    function edit(Brand $brand){

        return view('backend.brands.edit',compact('brand'));
    }
    function update(Request $request,Brand $brand){
        $data=$request->all();
        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($request->image);
        }
        $brand->update($data);
        Session::flash('message','Updated successfully');
        return redirect('/brands');
    }

    function destroy(Brand $brand){
        $this->unlink($brand->image);
        $brand->delete();
        Session::flash('message','Deleted successfully');

        return redirect('/brands');
    }
    private function uploadImage($file)
    {
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());//formatting the name for unique and readable
        $file_name =  $timestamp.'.'.$file->getClientOriginalExtension();
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
