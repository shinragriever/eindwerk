<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class categoryController extends Controller
{
    public function __construct(){

    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

   
    public function create()
    {
        $category = New Category();
        return view('admin.categories.create', compact('category'));

    }

  
    public function store(Request $request)
    {
        Category::create($this->validateRequest());


        return redirect()->route('categories.index')->with('success','Category has been created!');
    }

  
    public function show($id)
    {
        //
    }


    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

 
    public function update(Request $request, Category $category)
    {
        $this->validate($request, array(
            'name' => "required|min:2|unique:categories,name,$category->id",
        ));
        $category->update($request->all());


        return redirect()->route('categories.index')->with('success','Category has been updated!');
    }

 
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('error','Category has been deleted!');


    }
        private function validateRequest(){
           
        return request()->validate([
            'name' => 'required|min:2|unique:categories,name',
        ]);
        
    }

}
