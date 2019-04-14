<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function index()
    {
        
        $products = Product::all();
        return view ('admin.products.index',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = New Product();
        $categories = Category::all();
        return view('admin.products.create', compact('product','categories'));
    }

    public function store(Request $request)
    {
        
        Product::create($this->validateRequest());


        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

 
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product','categories'));
    }


    public function update(Request $request, Product $product)
    {
        
        $this->validate($request, array(
            'name' => "required|min:2|unique:products,name,$product->id",
            'description'=>'required|max:500',
            'price'=>'required|numeric',
            'category_id'=>'required'
        ));
        $product->update($request->all());
        

        return redirect()->route('products.index');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }

    private function validateRequest(){
        
        return request()->validate(
            
        [
            'name' => "required|min:2|unique:products,name",
            'description'=>'required|max:500',
            'price'=>'required|numeric',
            'category_id'=>'required'
        ]);
        
    }
}
