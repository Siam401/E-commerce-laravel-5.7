<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SupplierController extends Controller
{
    function index(){
        $paginatePerPage=5;
        $pageNumber=request('page') ;

        if (!is_null($pageNumber)){
            $serial=$paginatePerPage*$pageNumber-$paginatePerPage;
        }else{
            $serial=0;
        }
        $suppliers = Supplier::paginate($paginatePerPage);
        return view('backend.suppliers.index',compact('suppliers','serial'));
    }
    function create(){
        return view('backend.suppliers.create');
    }
    function store(Request $request){
        $data=$request->all();

        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($request->image);
        }
        Supplier::create($data);
        Session::flash('message','Brand created successfully');
        return redirect('/suppliers');
    }
    function show(Supplier $supplier){

        return view('backend.suppliers.show',compact('supplier'));
    }
    function edit(Supplier $supplier){

        return view('backend.suppliers.edit',compact('supplier'));
    }
    function update(Request $request,Supplier $supplier){
        $supplier->update($request->all());
        Session::flash('message','Upadated succesfull');
        return redirect('/suppliers');
    }

    function destroy(Supplier $supplier){

        $supplier->delete();
        Session::flash('message','Deleted succesfull');

        return redirect('/suppliers');
    }
}
