<?php

namespace App\Http\Controllers;

use App\Sub_category;
use Illuminate\Http\Request;

class Sub_categoryController extends Controller
{
    public function index()
    {
        $sub_categories=Sub_category::all();
        return view('backend.sub_categories.index',compact('sub_categories'));
    }

    public function create()
    {
        return view('backend.sub_categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Sub_category::create($data);
        return redirect()->route('sub_categories.index');
    }

    public function show(Sub_category $sub_category)
    {
        return view('backend.sub_categories.show',compact('sub_category'));
    }

    public function edit(Sub_category $sub_category)
    {
        return view('backend.sub_categories.edit',compact('sub_category'));
    }

    public function update(Request $request, Sub_category $sub_category)
    {
        $sub_category->update($request->all());
        return redirect()->route('sub_categories.index');
    }

    public function destroy(Sub_category $sub_category)
    {
        $sub_category->delete();
        return redirect()->route('sub_categories.index');
    }

    public function trash()
    {
        $sub_categories = Sub_category::onlyTrashed()->get();
        return view('backend.sub_categories.trash',compact('sub_categories'));
    }

    public function restore($id)
    {
        $sub_category = Sub_category::onlyTrashed()
            ->where('id',$id)
            ->first();
        $sub_category->restore();
        return redirect()->back();
    }
    public function delete($id)
    {
        $sub_category=Sub_category::onlyTrashed()
            ->where('id',$id)
            ->first();
        $sub_category->forceDelete();
        return redirect()->back();
    }
}
