<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('Admin.Category.buildCategory', compact('category'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $categoryUP = Category::findOrFail($id);
        $input = $request->all();
        $categoryUP->update($input);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->back();
    }

    public function posts($id){
        $category = Category::where('id', "=", $id)->pluck('name');
//        dd($category);
        return view('Admin.Category.buildCategory', compact('category'));
        //return $id;
    }
}
